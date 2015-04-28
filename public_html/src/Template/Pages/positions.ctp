<?php 
$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$params = array('api_key' => $ok_api_key, 'symbol' => 'btc_usd', 'contract_type' => 'this_week', 'type' => 1);
$okc_btc_position = $okcoin_client->singleBondPositionFutureApi($params);

$params = array('api_key' => $ok_api_key, 'symbol' => 'ltc_usd', 'contract_type' => 'this_week', 'type' => 1);
$okc_ltc_position = $okcoin_client->singleBondPositionFutureApi($params);
?>

<div class="row">
    <div class="col-lg-10 col-lg-offset-1 columns">
        <h1 class="page-header">Market Positions</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-10 col-lg-offset-1 columns">
    <?php
        echo "<H1> Bitcoin Position (OKCoin) </h1>";
        echo "<pre>" . print_r($okc_btc_position, TRUE) . "</pre>";
       
        echo "<h1> LTC Position (OKCoin) </h1>";
        echo "<pre>" . print_r($okc_ltc_position, TRUE) . "</pre>";
    ?>
    </div>
</div>
