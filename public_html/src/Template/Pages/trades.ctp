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


foreach($okcoin_trades_btc as $btc_trade) {
    echo "<pre>" . print_r($btc_trade, TRUE) . "</pre>";
}

foreach($okcoin_trades_ltc as $ltc_trade) {
    echo "<pre>" . print_r($ltc_trade, TRUE) . "</pre>";
}

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
                <?= "<pre>" . print_r($okcoin_trades_btc, TRUE) . "</pre>"; ?>
            </div>
            
            <div class="tab-pane fade" id="tab2">
                <?= "<pre>" . print_r($okcoin_trades_ltc, TRUE) . "</pre>"; ?>
            </div>
            
            <div class="tab-pane fade" id="tab3">
            
            </div>
        </div>
    </div>
</div>
