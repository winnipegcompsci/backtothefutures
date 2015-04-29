<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Core\Configure;
use Cake\Core\App;


class OKCoinShell extends Shell 
{   
    public function initialize() {
        parent::initialize();
        $this->loadModel('SpotPrices');
    }
        
    public function showKeys() {
        $this->out('OKCoin API Key: ' . Configure::read('okcoin.apikey'));
        $this->out('OKCoin Secret Key: ' . Configure::read('okcoin.secretkey'));
    }
    
    public function getPrice() {
        require_once(APP . 'Vendor' . DS  . 'okcoin' . DS . 'OKCoin.php');
        // App::import('Vendor', 'OKCoin', array('file' => 'okcoin' . DS . 'OKCoin.php'));
        
        /*
        $client = new OKCoin(
            new OKCoin_ApiKeyAuthentication(
                Configure::read('okcoin.apikey'), 
                Configure::read('okcoin.secretkey')
            )
        );
        */
        
        $client = Configure::read('okcoin.client');
        
        $this->out(print_r($client, TRUE));
      
        
    }
    
    
}