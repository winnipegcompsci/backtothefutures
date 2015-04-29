<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

$okcoin_client = Configure::read('okcoin.client');

$btcprices = TableRegistry::get('Spotprices')->find('all', [
    'condition' => ['currency_id' => '1']
]);

foreach($btcprices as $spotprice) {
    echo "<pre>" . print_r($spotprice, TRUE) . "</pre>";
}