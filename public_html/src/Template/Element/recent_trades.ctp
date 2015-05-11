<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

$okcoin_client = Configure::read('okcoin.client');
$okcoin_apikey = Configure::read('okcoin.apikey');
?>

<ul class="nav nav-pills">
    <li><a href="#trade_okcoin" data-toggle="tab">OKCoin</a></li>
    <li><a href="#trade_796" data-toggle="tab">796</a></li>
    <li><a href="#trade_bitvc" data-toggle="tab">BitVC</a></li>
</ul>

<div class="tab-content">
    <div class="tab-pane fade in active" id="trade_okcoin">
        <?php 
            $data = $okcoin_client->tradesFutureApi(['symbol' => 'btc_usd', 'contract_type' => 'quarter']);
        ?>
        <h4>BTC - Recent Trades </h4>
        <?php
            echo "<table>";
            echo "<tr><th>Amount</th> <th>Date</th> <th>Price</th> <th>Transaction #</th> <th>Type</th></tr>";
            foreach($data as $trade) {
                echo "<tr>"; 
                echo "<td>" . $trade->amount . "</td>";
                echo "<td>" . date('Y-m-d H:i:s', $trade->date) . "</td>";
                echo "<td>" . $trade->price . "</td>";
                echo "<td>" . $trade->tid . "</td>";
                echo "<td>" . $trade->type . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
        <h4>LTC - Recent Trades</h4>
        
    </div>
    <div class="tab-pane fade" id="trade_796">
        <h4>796 - Recent Trades</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
    </div>
    <div class="tab-pane fade" id="trade_bitvc">
        <h4>BitVC - Recent Trades</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget rutrum purus. Donec hendrerit ante ac metus sagittis elementum. Mauris feugiat nisl sit amet neque luctus, a tincidunt odio auctor. </p>
    </div>
</div>