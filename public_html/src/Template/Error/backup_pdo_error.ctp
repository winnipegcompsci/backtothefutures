<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;


echo "\$ERROR:" . "<pre>" . print_r($error) . "</pre>"; 
echo "\nMESSAGE: " . "<pre>" . print_r($error, TRUE) . "</pre>";

if (Configure::read('debug')):
    $this->layout = 'dev_error';

    $this->assign('title', $message);

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <h1>
        <?= h($error->queryString) ?>
        </h1>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?= Debugger::dump($error->params) ?>
<?php endif; ?>
<?php
    echo $this->element('auto_table_warning');

    if (extension_loaded('xdebug')):
        xdebug_print_function_stack();
    endif;

    $this->end();
endif;
?>
<h2><?= __d('cake', 'An Internal Error Has Occurred') ?></h2>
<p class="error">
    <strong><?= __d('cake', 'Error') ?>:</strong>
    <?= h($message) ?>
</p>
