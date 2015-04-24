<?php 
$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$okc_btc_ticker = $okcoin_client->tickerApi(array('symbol' => 'btc_usd'));
$okc_ltc_ticker = $okcoin_client->tickerApi(array('symbol' => 'ltc_usd'));
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?= ucwords($this->request->params['pass'][0]); ?></h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-lg-offset-1 columns">
        <div class="panel panel-default">
            <div class="panel-heading"> BTC Spot Price (OKCoin.com) </div>
            <div class="panel-body">     
                <table class="col-lg-12 columns"> 
                    <tr>
                        <th> Item </th> <th class="pull-right"> Value </th>
                    </tr>
                    <tr>
                        <td> Low </td> <td class="pull-right"> <?= $okc_btc_ticker->ticker->low ?> </td>
                    </tr>
                    <tr>
                        <td> High</td> <td class="pull-right"> <?= $okc_btc_ticker->ticker->high ?> </td>
                    </tr>
                    <tr>
                        <td> Last </td> <td class="pull-right"> <?= $okc_btc_ticker->ticker->last ?>  </td>
                    </tr>
                    <tr>
                        <td> Buy </td> <td class="pull-right"> <?= $okc_btc_ticker->ticker->buy ?> </td>
                    </tr>
                    <tr>
                        <td> Sell </td> <td class="pull-right"> <?= $okc_btc_ticker->ticker->sell ?>  </td>
                    </tr>
                    <tr>
                        <td> Volume </td> <td class="pull-right"> <?= $okc_btc_ticker->ticker->vol ?> </td>
                    </tr>     
                </table>       
            </div>
        </div>
    </div>
        
    <div class="col-lg-4 columns">
        <?= $this->element('btcgraph'); ?>
    </div>    
        
    <div class="col-lg-3 columns">
        <div class="panel panel-default">
            <div class="panel-heading"> BTC Spot Price (796.com) </div>
            <div class="panel-body">
                <table class="col-lg-12 columns"> 
                    <tr>
                        <th> Item </th> <th class="pull-right"> Value </th>
                    </tr>
                    <tr>
                        <td> Low </td> <td class="pull-right"> </td>
                    </tr>
                    <tr>
                        <td> High</td> <td class="pull-right">  </td>
                    </tr>
                    <tr>
                        <td> Last </td> <td class="pull-right">  </td>
                    </tr>
                    <tr>
                        <td> Buy </td> <td class="pull-right">  </td>
                    </tr>
                    <tr>
                        <td> Sell </td> <td class="pull-right">  </td>
                    </tr>
                    <tr>
                        <td> Volume </td> <td class="pull-right"> </td>
                    </tr>     
                </table> 
            </div>
        </div>
    </div>
</div> <!-- ./row --> 

<div class="row">
    <div class="col-lg-3 col-lg-offset-1 columns">
        <div class="panel panel-default">
            <div class="panel-heading"> LTC Spot Price (OKCoin.com) </div>
            <div class="panel-body">
                <table class="col-lg-12 columns"> 
                    <tr>
                        <th> Item </th> <th class="pull-right"> Value </th>
                    </tr>
                    <tr>
                        <td> Low </td> <td class="pull-right"> <?= $okc_ltc_ticker->ticker->low ?> </td>
                    </tr>
                    <tr>
                        <td> High</td> <td class="pull-right"> <?= $okc_ltc_ticker->ticker->high ?> </td>
                    </tr>
                    <tr>
                        <td> Last </td> <td class="pull-right"> <?= $okc_ltc_ticker->ticker->last ?>  </td>
                    </tr>
                    <tr>
                        <td> Buy </td> <td class="pull-right"> <?= $okc_ltc_ticker->ticker->buy ?> </td>
                    </tr>
                    <tr>
                        <td> Sell </td> <td class="pull-right"> <?= $okc_ltc_ticker->ticker->sell ?>  </td>
                    </tr>
                    <tr>
                        <td> Volume </td> <td class="pull-right"> <?= $okc_ltc_ticker->ticker->vol ?> </td>
                    </tr>        
                </table>
            </div>
        </div>
    </div>
 
    <div class="col-lg-4 columns">
        <?= $this->element('ltcgraph'); ?>
    </div>
 
    <div class="col-lg-3 columns">
        <div class="panel panel-default">
            <div class="panel-heading"> LTC Spot Price (796.com) </div>
            <div class="panel-body">
            <table class="col-lg-12 columns"> 
                <tr>
                    <th> Item </th> <th class="pull-right"> Value </th>
                </tr>
                <tr>
                    <td> Low </td> <td class="pull-right"> </td>
                </tr>
                <tr>
                    <td> High</td> <td class="pull-right">  </td>
                </tr>
                <tr>
                    <td> Last </td> <td class="pull-right">  </td>
                </tr>
                <tr>
                    <td> Buy </td> <td class="pull-right">  </td>
                </tr>
                <tr>
                    <td> Sell </td> <td class="pull-right">  </td>
                </tr>
                <tr>
                    <td> Volume </td> <td class="pull-right"> </td>
                </tr>     
            </table>
            </div>
        </div>
    </div>
 </div>