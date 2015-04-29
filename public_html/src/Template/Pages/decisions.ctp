<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

$okcoin_client = Configure::read('okcoin.client');

$spotprices = TableRegistry::get('Spotprices')->find('all');

echo "<pre>" . print_r($spotprices,  TRUE) . "</pre>";