<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

function sortOnID($a, $b) {
    return $a['id'] - $b['id'];
}


foreach(TableRegistry::get('Currencies')->find('all') as $currency) {
    if($currency->currency_name == "Bitcoin") {
        $btcID = $currency->id;
    } else if($currency->currency_name == "Litecoin") {
        $ltcID = $currency->id;
    }
}

foreach(TableRegistry::get('Sources')->find('all') as $source) {
    if(strtoupper($source->source_name) == "OKCOIN") {
        $OKCOIN_ID = $source->id;
    } else if(strtoupper($source->source_name) == "796") {
        $X796_ID = $source->id;
    }
}


$okcoin_btc = TableRegistry::get('Spotprices')->find('all', [
    'conditions' => ['currency_id' => $btcID, 'source_id' => $OKCOIN_ID],
    'limit' => 200,
])->order(['id' => 'DESC'])->toArray();

$x796_btc = TableRegistry::get('Spotprices')->find('all', [
    'conditions' => ['currency_id' => $btcID, 'source_id' => $X796_ID],
    'limit' => 200,
])->order(['id' => 'DESC'])->toArray();

usort($okcoin_btc, 'sortOnID');
usort($x796_btc, 'sortOnID');

?>

Trading Dashboard Here