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