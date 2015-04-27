<?php 
use Cake\Core\Configure;

$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$okc_btc_ticker = $okcoin_client->tickerApi(array('symbol' => 'btc_usd'));
$okc_ltc_ticker = $okcoin_client->tickerApi(array('symbol' => 'ltc_usd'));

function getPost($params = array()) {
    ksort($params);
    $sign = "";
    while ($key = key($params)) {
        $sign .= $key . "=" . $params[$key] . "&";
        next($params);
    }
    $sign	= rtrim($sign,"&");
    $sign	= base64_encode(hash_hmac('sha1', $sign, Configure::read('xchange796.secretkey')));

    $post = array(
        'apikey'	=> $params['apikey'],
        'sign'	=> $sign,
    );
    
    return $post;
}

function curl_get($url, $data = array()) {
    $curl = curl_init($url);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
	if(!empty($data)) {
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	}
	$rs = curl_exec($curl);
	curl_close($curl);
	return $rs;
}

$BASE_URL = "http://api.796.com/v3/futures/ticker.html?type=";

$params = array(
    'apikey' => $x796_api_key,
    'secretkey' => $x796_secret_key,
);

$post = getPost($params);     
$url = $BASE_URL . 'weekly';
$x796_btc_ticker = json_decode(curl_get($url, $post));

$url = $BASE_URL . 'ltc';
$x796_ltc_ticker = json_decode(curl_get($url, $post));
?>

<div class="row">
    <div class="col-lg-12 col-lg-offset-1 columns">
        <h1 class="page-header"><?= ucwords($this->request->params['pass'][0]); ?></h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-2 col-lg-offset-1 columns">
        <div class="panel panel-blue">
            <div class="panel-heading"> BTC (OKCoin.com) </div>
            <div class="panel-body">     
                <table class="col-lg-12 columns"> 
                    <tr>
                        <th> Item </th> <th class="pull-right"> Value </th>
                    </tr>
                    <tr>
                        <td> Low </td> <td class="pull-right">$ <?= $okc_btc_ticker->ticker->low ?> </td>
                    </tr>
                    <tr>
                        <td> High</td> <td class="pull-right">$ <?= $okc_btc_ticker->ticker->high ?> </td>
                    </tr>
                    <tr>
                        <td> Last </td> <td class="pull-right">$ <?= $okc_btc_ticker->ticker->last ?>  </td>
                    </tr>
                    <tr>
                        <td> Buy </td> <td class="pull-right">$ <?= $okc_btc_ticker->ticker->buy ?> </td>
                    </tr>
                    <tr>
                        <td> Sell </td> <td class="pull-right">$ <?= $okc_btc_ticker->ticker->sell ?>  </td>
                    </tr>
                    <tr>
                        <td> Volume </td> <td class="pull-right">$ <?= $okc_btc_ticker->ticker->vol ?> </td>
                    </tr>     
                </table>       
            </div>
        </div>
    </div>
        
    <div class="col-lg-6 columns">
        <?= $this->element('btcgraph'); ?>
    </div>    
        
    <div class="col-lg-2 columns">
        <div class="panel panel-blue">
            <div class="panel-heading"> BTC (796.com) </div>
            <div class="panel-body">
                <table class="col-lg-12 columns"> 
                    <tr>
                        <th> Item </th> <th class="pull-right"> Value </th>
                    </tr>
                    <tr>
                        <td> Low </td> <td class="pull-right">$ <?= $x796_btc_ticker->ticker->low ?> </td>
                    </tr>
                    <tr>
                        <td> High</td> <td class="pull-right">$ <?= $x796_btc_ticker->ticker->high ?> </td>
                    </tr>
                    <tr>
                        <td> Last </td> <td class="pull-right">$ <?= $x796_btc_ticker->ticker->last ?> </td>
                    </tr>
                    <tr>
                        <td> Buy </td> <td class="pull-right">$ <?= $x796_btc_ticker->ticker->buy ?> </td>
                    </tr>
                    <tr>
                        <td> Sell </td> <td class="pull-right">$ <?= $x796_btc_ticker->ticker->sell ?> </td>
                    </tr>
                    <tr>
                        <td> Volume </td> <td class="pull-right"> <?= $x796_btc_ticker->ticker->vol ?></td>
                    </tr>     
                </table> 
            </div>
        </div>
    </div>
</div> <!-- ./row --> 

<div class="row">
    <div class="col-lg-2 col-lg-offset-1 columns">
        <div class="panel panel-teal">
            <div class="panel-heading"> LTC (OKCoin.com) </div>
            <div class="panel-body">
                <table class="col-lg-12 columns"> 
                    <tr>
                        <th> Item </th> <th class="pull-right"> Value </th>
                    </tr>
                    <tr>
                        <td> Low </td> <td class="pull-right">$ <?= $okc_ltc_ticker->ticker->low ?> </td>
                    </tr>
                    <tr>
                        <td> High</td> <td class="pull-right">$ <?= $okc_ltc_ticker->ticker->high ?> </td>
                    </tr>
                    <tr>
                        <td> Last </td> <td class="pull-right">$ <?= $okc_ltc_ticker->ticker->last ?>  </td>
                    </tr>
                    <tr>
                        <td> Buy </td> <td class="pull-right">$ <?= $okc_ltc_ticker->ticker->buy ?> </td>
                    </tr>
                    <tr>
                        <td> Sell </td> <td class="pull-right">$ <?= $okc_ltc_ticker->ticker->sell ?>  </td>
                    </tr>
                    <tr>
                        <td> Volume </td> <td class="pull-right"> <?= $okc_ltc_ticker->ticker->vol ?> </td>
                    </tr>        
                </table>
            </div>
        </div>
    </div>
 
    <div class="col-lg-6 columns">
        <?= $this->element('ltcgraph'); ?>
    </div>
 
    <div class="col-lg-2 columns">
        <div class="panel panel-teal">
            <div class="panel-heading"> LTC (796.com) </div>
            <div class="panel-body">
            <table class="col-lg-12 columns"> 
                <tr>
                    <th> Item </th> <th class="pull-right"> Value </th>
                </tr>
                <tr>
                    <td> Low </td> <td class="pull-right">$ <?= $x796_ltc_ticker->ticker->low ?> </td>
                </tr>
                <tr>
                    <td> High</td> <td class="pull-right">$ <?= $x796_ltc_ticker->ticker->high ?> </td>
                </tr>
                <tr>
                    <td> Last </td> <td class="pull-right">$ <?= $x796_ltc_ticker->ticker->last ?> </td>
                </tr>
                <tr>
                    <td> Buy </td> <td class="pull-right">$ <?= $x796_ltc_ticker->ticker->buy ?> </td>
                </tr>
                <tr>
                    <td> Sell </td> <td class="pull-right">$ <?= $x796_ltc_ticker->ticker->sell ?> </td>
                </tr>
                <tr>
                    <td> Volume </td> <td class="pull-right"> <?= $x796_ltc_ticker->ticker->vol ?> </td>
                </tr>     
            </table>
            </div>
        </div>
    </div>
 </div>