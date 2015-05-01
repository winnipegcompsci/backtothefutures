<?php 
$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$okcoin_lend_btc = $okcoin_client->lendDepthApi(array(
    'symbol' => 'btc_usd', 
));

$okcoin_lend_ltc = $okcoin_client->lendDepthApi(array(
    'symbol' => 'ltc_usd',
));
$okcoin_lend_usd = $okcoin_client->lendDepthApi(array(
    'symbol' => 'usd',
));
?>

<div class="panel panel-info">
    <div class="panel-body tabs">
        <div class="col-lg-12">
            <ul class="nav nav-pills">
                <li class="active"><a href="#tab1" data-toggle="tab" onclick="redraw()">OKCoin</a></li>
                <li><a href="#tab2" data-toggle="tab" onclick="redraw()">796.com</a></li>
                <li><a href="#tab3" data-toggle="tab" onclick="redraw()">BitVC</a></li>
                <li class="pull-right"><span><h3>Futures Lending Depth</h3></span></li>
            </ul>
        </div>
        
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">               
                <div class="row">
                    <div class="columns col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><span>(BTC) Bitcoin</span></div>
                            <div class="panel-body">
                                <table width="100%" id = "okcoin_btc_table">
                                    <thead>
                                    <tr>
                                        <th>Amount (BTC)</th>
                                        <th>Loan Days</th>
                                        <th>Number of Loans</th>
                                        <th>Interest Rate</th>
                                    </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php 
                                        foreach($okcoin_lend_btc->lend_depth as $btc_lend) {
                                            echo "<tr>";
                                            echo "<td>" . $btc_lend->amount . "</td>";
                                            echo "<td>" . $btc_lend->days . "</td>";
                                            echo "<td>" . $btc_lend->num . "</td>";
                                            echo "<td>" . $btc_lend->rate . "</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>        
                            </div>
                        </div>
                    </div>
                    
                    <div class="columns col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><span>(USD) Dollars</span></div>
                            <div class="panel-body">
                                <table width="100%" id= "okcoin_usd_table">
                                    <thead>
                                    <tr>
                                        <th>Amount (USD)</th>
                                        <th>Loan Days</th>
                                        <th>Number of Loans</th>
                                        <th>Interest Rate</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach($okcoin_lend_usd->lend_depth as $usd_lend) {
                                            echo "<tr>";
                                            echo "<td>" . $usd_lend->amount . "</td>";
                                            echo "<td>" . $usd_lend->days . "</td>";
                                            echo "<td>" . $usd_lend->num . "</td>";
                                            echo "<td>" . $usd_lend->rate . "</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="columns col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><span>(LTC) Litecoin</span></div>
                            <div class="panel-body">
                                <table width="100%" id= "okcoin_ltc_table">
                                    <thead>
                                    <tr>
                                        <th>Amount (BTC)</th>
                                        <th>Loan Days</th>
                                        <th>Number of Loans</th>
                                        <th>Interest Rate</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        foreach($okcoin_lend_ltc->lend_depth as $ltc_lend) {
                                            echo "<tr>";
                                            echo "<td>" . $ltc_lend->amount . "</td>";
                                            echo "<td>" . $ltc_lend->days . "</td>";
                                            echo "<td>" . $ltc_lend->num . "</td>";
                                            echo "<td>" . $ltc_lend->rate . "</td>";
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
$(document).ready( function () {
    $('#okcoin_usd_table').DataTable({
        "pagingType": "full_numbers",
    });
} );
</script>