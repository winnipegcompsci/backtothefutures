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
        $this->loadModel('Currencies');
        $this->loadModel('Sources');
    }
        
    public function showKeys() {
        $this->out('OKCoin API Key: ' . Configure::read('okcoin.apikey'));
        $this->out('OKCoin Secret Key: ' . Configure::read('okcoin.secretkey'));
    }
    
    public function getPrice() {
        $client = Configure::read('okcoin.client');      
        // $this->out(print_r($client, TRUE));
        
        $btc_ticker = $client->tickerFutureApi(array('symbol' => 'btc_usd', 'contract_type' => 'this_week'));
        $ltc_ticker = $client->tickerFutureApi(array('symbol' => 'ltc_usd', 'contract_type' => 'this_week'));
        
        foreach($this->Currencies->find('all') as $currency) {
            $this->out('Currency: ' . print_r($currency, TRUE) );
        }
        
        
        
    }
    
    
}