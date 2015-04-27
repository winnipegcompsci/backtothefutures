<?php 
$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$okc_btc_depth = $okcoin_client->depthApi(array('symbol' => 'btc_usd', 'size' => 5));
$okc_ltc_depth = $okcoin_client->depthApi(array('symbol' => 'ltc_usd', 'size' => 5));

echo "Client:: <pre>" . print_r($okcoin_client, TRUE) . "</pre>";
echo "BTC Depth<pre>" . print_r($okc_btc_depth, TRUE) . "</pre>";
echo "LTC Depth<pre>" . print_r($okc_ltc_depth, TRUE) . "</pre>";

$okc_btc_future_depth = $okcoin_client->depthFutureApi(array(
    'symbol' => 'btc_usd', 
    'contract_type' => 'this_week', 
    'size' => 5
));

$okc_ltc_future_depth = $okcoin_client->depthFutureApi(array(
    'symbol' => 'ltc_usd', 
    'contract_type' => 'this_week',
    'size' => 5,
));

?>
<table>
<tr>
    <th>Currency</th>
    <th>Current Depth</th>
    <th>Future Depth</th>
</tr>

<tr>
    <td>BTC</td>
    <td><?php echo "<pre>" . print_r($okc_btc_depth, TRUE) . "</pre>"; ?></td>
    <td><?php echo "<pre>" . print_r($okc_btc_future_depth, TRUE) . "</pre>"; ?></td>
</tr>

<tr>
    <td> LTC </td>
    <td><?php echo "<pre>" . print_r($okc_ltc_depth, TRUE) . "</pre>"; ?></td>
    <td><?php echo "<pre>" . print_r($okc_ltc_future_depth, TRUE) .  "</pre>"; ?></td>
</tr>
</table>

 