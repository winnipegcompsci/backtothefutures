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
                        <h4 class="pull-left"> Bitcoin (BTC)</h4>
                    </div>
                    
                    <div class="columns col-lg-6">
                        <h4 class="pull-right">(LTC) Litecoin</h4>
                    </div>
                </div>
                
                <div class="row">
                    <div class="columns col-lg-6">
                        <?= "<pre>" . print_r($okcoin_trades_btc, TRUE) . "</pre>"; ?>                    
                    </div>
                    
                    <div class="columns col-lg-6">
                        <?= "<pre>" . print_r($okcoin_trades_ltc, TRUE) . "</pre>"; ?>
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
