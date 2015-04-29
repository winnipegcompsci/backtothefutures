<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Core\Configure;



class OKCoinShell extends Shell 
{   
    public function initialize() {
        
        $this->loadModel('SpotPrices');
    }
        
    public function showKeys() {
        $this->out('OKCoin API Key: ' . Configure::read('okcoin.apikey'));
        $this->out('OKCoin Secret Key: ' . Configure::read('okcoin.secretkey'));
    }
    
    public function getPrice() {
        // require_once(APP . 'Vendor' . DS  . 'okcoin' . DS . 'OKCoin.php');
        App::import('AppController', 'Controller');
        App::import('Core', 'Component');
        App::import('Vendor', 'OKCoin', array('file' => 'okcoin' . DS . 'OKCoin.php'));

        
        $client = new OKCoin(
            new OKCoin_ApiKeyAuthentication(
                Configure::read('okcoin.apikey'), 
                Configure::read('okcoin.secretkey')
            )
        );
        
        $this->out(print_r($client, TRUE));
       
        
    }
    
    
}