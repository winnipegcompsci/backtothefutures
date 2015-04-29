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
        
        foreach($this->Sources->find('all') as $source) {
            if($source->source_name == "OKCoin") {
                $okcoin = $source;
            } 
        }
        
        foreach($this->Currencies->find('all') as $currency) {
            if($currency->currency_name == "bitcoin") {
                $bitcoin = $currency; 
            } else if($currency->currency_name == "litecoin") {
                $litecoin = $currency;
            }
        }           
        
        $spotprice = $this->SpotPrices->newEntity();      
        $spotprice->currency_id = $bitcoin->id;
        $spotprice->source_id = $okcoin->id;
        $spotprice->low = $btc_ticker->ticker->low;
        $spotprice->high = $btc_ticker->ticker->high;
        $spotprice->last = $btc_ticker->ticker->last;
        $spotprice->buy = $btc_ticker->ticker->buy;
        $spotprice->sell = $btc_ticker->ticker->sell;
        $spotprice->volume = $btc_ticker->ticker->vol;
        $spotprice->timestamp = date('Y-m-d H:i:s', $btc_ticker->date);
                
        if($this->SpotPrices->save($spotprice)) {
            $this->out('Saved New Spotprice');
        } else {
            $this->out('Failed to save Spotprice');
        }
    }
    
    
}