<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

$okcoin_client = Configure::read('okcoin.client');

$btcprices = TableRegistry::get('Spotprices')->find('all', [
    'conditions' => ['currency_id' => '1']
]);

?>
<div class="columns col-lg-12 col-lg-offset-1">
<H1> Bitcoin Decisions </H1>
<?php 
echo "<table id=\"datatable\" width='100%'>";
echo "<tr>";
echo "<th>Low</th>";
echo "<th>High</th>";
echo "<th>Last</th>";
echo "<th>Buy </th>";
echo "<th>Sell</th>";
echo "<th>Volume</th>";
echo "<th>Timestamp</th>";
echo "<th>Action</th>";
echo "</tr>";

foreach($btcprices as $spotprice) {    
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
        echo 0;
    }
    echo "</td>";
    echo "</tr>";
    
    
    
    $lastprice = $spotprice;
}
echo "</table>";
?>
</div>