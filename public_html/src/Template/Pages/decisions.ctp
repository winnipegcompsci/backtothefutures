<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;


function printTable($prices) {
    echo "<table id=\"datatable\" class='columns col-lg-11'>";
    echo "<tr>";
    echo "<th>Low</th>";
    echo "<th>High</th>";
    echo "<th>Last</th>";
    echo "<th>Buy </th>";
    echo "<th>Sell</th>";
    echo "<th>Volume</th>";
    echo "<th>Timestamp</th>";
    echo "<th>Change (Last) </th>";
    echo "<th>Action</th>";
    echo "</tr>";

    foreach($prices as $spotprice) {    
        echo "<tr>";
        echo "<td>" . $spotprice->low . "</td>";
        echo "<td>" . $spotprice->high . "</td>";
        echo "<td>" . $spotprice->last . "</td>";
        echo "<td>" . $spotprice->buy . "</td>";
        echo "<td>" . $spotprice->sell . "</td>";
        echo "<td>" . $spotprice->volume . "</td>";
        echo "<td>" . $spotprice->timestamp . "</td>";      
        echo "<td>";
        if(isset($lastprice)) {
            echo $spotprice->last - $lastprice->last;   
        } else {
            echo "Initial";
        }
        echo "</td>";
        echo "<td></td>";
        echo "</tr>";

        $lastprice = $spotprice;
    }
    
    echo "</table>";
}

$okcoin_client = Configure::read('okcoin.client');

$btcId = TableRegistry::get('Currencies')->findByCurrencyName('Bitcoin')->id;
$ltcId = TableRegistry::get('Currencies')->findByCurrencyName('Litecoin')->id;

echo "<pre> BTC ID:: " . print_r($btcId, TRUE) . "</pre>";
echo "<pre> LTC ID:: " . print_r($ltcId, TRUE) . "</pre>";

$btcprices = TableRegistry::get('Spotprices')->find('all', [
    'conditions' => ['currency_id' => '1']
]);
$ltcprices = TableRegistry::get('Spotprices')->find('all', [
    'conditions' => ['currency_id' => '2']
]);

?>
<div class="columns col-lg-12 col-lg-offset-1">
<H1> Bitcoin Decisions </H1>
<? printTable($btcPrices); ?>
<H1> Litecoin Decisions </H1>
<? printTable($ltcPrices); ?>
</div>