<?php
/**
 * SchedulerShell
 * Author: Trent Richardson [http://trentrichardson.com]
 *
 * Copyright 2015 Trent Richardson
 * You may use this project under MIT license.
 * http://trentrichardson.com/Impromptu/MIT-LICENSE.txt
 *
 * -------------------------------------------------------------------
 * To configure:
 * In your bootstrap.php you must add your jobs:
 *
 * Configure::write('SchedulerShell.jobs', array(
 * 	'CleanUp' => array('interval'=>'next day 5:00','task'=>'CleanUp'),// tomorrow at 5am
 * 	'Newsletters' => array('interval'=>'PT15M','task'=>'Newsletter') //every 15 minutes
 * ));
 *
 * -------------------------------------------------------------------
 * Add cake to $PATH:
 * - edit .bashrc (linux) or .bash_profile (mac) and add
 * - export PATH="/path/to/cakephp/lib/Cake/Console:$PATH"
 * - reload with:
 * 	>> source .bashrc
 *
 * -------------------------------------------------------------------
 * Run a shell task:
 * - Cd into app dir
 * - run this:
 * 	>> Console/cake Scheduler.Scheduler
 *
 * -------------------------------------------------------------------
 * Troubleshooting
 * - may have to run dos2unix to fix line endings in the Config/cake file
 */
namespace Scheduler\Shell;

use Cake\Console\Shell;
use Cake\Core\Configure;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use \DateTime;
use \DateInterval;

class SchedulerShell extends Shell{

	public $tasks = array();

/**
 * The array of scheduled tasks.
 */
	private $schedule = array();

/**
 * The key which you set Configure::read() for your jobs
 */
	private $configKey = 'SchedulerShell';

/**
 * The path where the store file is placed. null will store in Config folder
 */
	private $storePath = null;

/**
 * The file name of the store
 */
	private $storeFile = 'cron_scheduler.json';

/**
 * The number of seconds to wait before running a parallel SchedulerShell
 */
	private $processingTimeout = 600;

/**
 * The main method which you want to schedule for the most frequent interval
 */

/**
 * main function.
 *
 * @access public
 * @return void
 */
	public function main() {

		// read in the config
		if ($config = Configure::read($this->configKey)) {

			if (isset($config['storePath'])) {
				$this->storePath = $config['storePath'];
			}

			if (isset($config['storeFile'])) {
				$this->storeFile = $config['storeFile'];
			}

			if (isset($config['processingTimeout'])) {
				$this->processingTimeout = $config['processingTimeout'];
			}

			// read in the jobs from the config
			if (isset($config['jobs'])) {
				foreach ($config['jobs'] as $k => $v) {
					$v = $v + array('action' => 'main', 'pass' => array());
					$this->connect($k, $v['interval'], $v['task'], $v['action'], $v['pass']);
				}
			}
		}

		// ok, run them when they're ready
		$this->runjobs();
	}

/**
 * The connect method adds tasks to the schedule
 *
 * @access public
 * @param string $name - unique name for this job, isn't bound to anything and doesn't matter what it is
 * @param string $interval - date interval string "PT5M" (every 5 min) or a relative Date string "next day 10:00"
 * @param string $task - name of the cake task to call
 * @param string $action - name of the method within the task to call
 * @param array  $pass - array of arguments to pass to the method
 * @return void
 */
	public function connect($name, $interval, $task, $action = 'execute', $pass = array()) {
		$this->schedule[$name] = array(
			'name' => $name,
			'interval' => $interval,
			'task' => $task,
			'action' => $action,
			'args' => $pass,
			'lastRun' => null,
			'lastResult' => ''
		);
	}

/**
 * Process the tasks when they need to run
 *
 * @access private
 * @return void
 */
	private function runjobs() {
		$dir = new Folder(TMP);

		// set processing flag so function takes place only once at any given time
		$processing = count($dir->find('\.scheduler_running_flag'));
		$processingFlag = new File($dir->slashTerm($dir->pwd()) . '.scheduler_running_flag');

		if ($processing && (time() - $processingFlag->lastChange()) < $this->processingTimeout) {
			$this->out("Scheduler already running! Exiting.");
			return false;
		} else {
			$processingFlag->delete();
			$processingFlag->create();
		}

		if (!$this->storePath) {
			$this->storePath = TMP;
		}

		// look for a store of the previous run
		$store = "";
		$storeFilePath = $this->storePath.$this->storeFile;
		if (file_exists($storeFilePath)) {
			$store = file_get_contents($storeFilePath);
		}
		$this->out('Reading from: '. $storeFilePath);

		// build or rebuild the store
		if ($store != '') {
			$store = json_decode($store, true);
		} else {
			$store = $this->schedule;
		}

		// run the jobs that need to be run, record the time
		foreach ($this->schedule as $name => $job) {
			$now = new DateTime();
			$task = $job['task'];
			$action = $job['action'];

			// if the job has never been run before, create it
			if (!isset($store[$name])) {
				$store[$name] = $job;
			}

			// figure out the last run date
			$tmptime = $store[$name]['lastRun'];
			if ($tmptime == null) {
				$tmptime = new DateTime("1969-01-01 00:00:00");
			} elseif (is_array($tmptime)) {
				$tmptime = new DateTime($tmptime['date'], new DateTimeZone($tmptime['timezone']));
			} elseif (is_string($tmptime)) {
				$tmptime = new DateTime($tmptime);
			}

			// determine the next run time based on the last
			if (substr($job['interval'],0,1) === 'P') {
				$tmptime->add(new DateInterval($job['interval'])); // "P10DT4H" http://www.php.net/manual/en/class.dateinterval.php
			} else {
				$tmptime->modify($job['interval']); // "next day 10:30" http://www.php.net/manual/en/datetime.formats.relative.php
			}

			// is it time to run? has it never been run before?
			if ($tmptime <= $now) {
				$this->hr();
				$this->out("Running $name");
				$this->hr();

				if (!isset($this->$task)) {
					$this->$task = $this->Tasks->load($task);

					// load models if they aren't already
					// foreach ($this->$task->uses as $mk => $mv) {
					// 	if (!isset($this->$task->$mv)) {
					// 		App::uses('AppModel', 'Model');
					// 		App::uses($mv, 'Model');
					// 		$this->$task->$mv = new $mv();
					// 	}
					// }
				}

				// grab the entire schedule record incase it was updated..
				$store[$name] = $this->schedule[$name];

				// execute the task and store the result
				$store[$name]['lastResult'] = call_user_func_array(array($this->$task, $action), $job['args']);

				// assign it the current time
				$now = new DateTime();
				$store[$name]['lastRun'] = $now->format('Y-m-d H:i:s');
			}
		}

		// write the store back to the file
		file_put_contents($this->storePath.$this->storeFile, json_encode($store));

		// remove processing flag
		$processingFlag->delete();
	}
}
