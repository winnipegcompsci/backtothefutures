<?php 
$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$okcoin_trades_btc = $okcoin_client->tradesFutureApi(array(
    'symbol' => 'btc_usd', 
    'contract_type' => 'this_week', 
));

$okcoin_trades_ltc = $okcoin_client->tradesFutureApi(array(
    'symbol' => 'ltc_usd',
    'contract_type' => 'this_week',
));
?>

<div class="panel panel-info">
    <div class="panel-body tabs">
        <div class="col-lg-12">
            <ul class="nav nav-pills">
                <li class="active"><a href="#tab1" data-toggle="tab" onclick="redraw()">OKCoin</a></li>
                <li><a href="#tab2" data-toggle="tab" onclick="redraw()">796.com</a></li>
                <li><a href="#tab3" data-toggle="tab" onclick="redraw()">BitVC</a></li>
                <li class="pull-right"><span><h3>Futures Trades</h3></span></li>
            </ul>
        </div>
        
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">               
                <div class="row">
                    <div class="columns col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><span class="pull-right">Bitcoin (BTC)</span></div>
                            <div class="panel-body">
                                <table width="100%" id = "okcoin_btc_table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Amount (BTC)</th>
                                        <th>Price/BTC (USD)</th>
                                        <th>Transaction ID</th>
                                        <th>Type</th>
                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php 
                                        foreach($okcoin_trades_btc as $btc_trade) {
                                            echo "<tr>";
                                            echo "<td>" . date('Y-m-d H:i:s', $btc_trade->date) . "</td>";
                                            echo "<td>" . $btc_trade->amount . "</td>";
                                            echo "<td> $" . number_format($btc_trade->price, 2) . "</td>";
                                            echo "<td>" . $btc_trade->tid . "</td>";
                                            echo "<td>" . $btc_trade->type . "</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>        
                            </div>
                        </div>
                    </div>
                    
                    <div class="columns col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><span class="pull-left">(LTC) Litecoin</span></div>
                            <div class="panel-body">
                                <table width="100%" id= "okcoin_ltc_table">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Amount (LTC)</th>
                                        <th>Price/LTC (USD)</th>
                                        <th>Transaction ID</th>
                                        <th>Type</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach($okcoin_trades_ltc as $ltc_trade) {
                                            echo "<tr>";
                                            echo "<td>" . date('Y-m-d H:i:s', $ltc_trade->date) . "</td>";
                                            echo "<td>" . $ltc_trade->amount . "</td>"; 
                                            echo "<td>$" . number_format($ltc_trade->price, 2) . "</td>";
                                            echo "<td>" . $ltc_trade->tid . "</td>";
                                            echo "<td>" . $ltc_trade->type . "</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="tab2">
                <!-- 796.com Data Here -->
            </div>
            
            <div class="tab-pane fade" id="tab3">
                <!-- BitVC Data Here -->
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" charset="utf8" src="../js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="../js/jquery.dataTables.min.js"></script>

<script>
$(document).ready( function () {
    $('#okcoin_btc_table').DataTable({
        "pagingType": "full_numbers",
    });
} );
$(document).ready( function () {
    $('#okcoin_ltc_table').DataTable({
        "pagingType": "full_numbers",
    });
} );
</script>