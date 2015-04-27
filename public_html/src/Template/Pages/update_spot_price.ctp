<?php 

$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$okc_btc_ticker = $okcoin_client->tickerApi(array('symbol' => 'btc_usd'));
$okc_ltc_ticker = $okcoin_client->tickerApi(array('symbol' => 'ltc_usd'));

echo "<pre>" . print_r($okc_btc_ticker, TRUE) . "</pre>";
echo "<pre>" . print_r($okc_ltc_ticker, TRUE) . "</pre>";

echo "<pre>" . print_r($this->Spotprice->read(null, 1), TRUE) . "</pre>";