<?php 
$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$okcoin_ticker_btc = $okcoin_client->tickerFutureApi(array(
    'symbol' => 'btc_usd',
    'contract_type' => 'this_week',
));

$okcoin_ticker_ltc = $okcoin_client->tickerFutureApi(array(
    'symbol' => 'btc_usd',
    'contract_type' => 'this_week',
));

?>

<div class="row">
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-blue">
            <div class="panel-heading">OKCoin - Bitcoin (BTC)</div>
            <div class="panel-body">
                <table width="100%">
                    <tr>
                        <th> Item </th> <th> Value </th>
                    </tr>
                    <tr><td>Low</td> <td><?= $okcoin_ticker_btc->ticker->low; ?></td> </tr>
                    <tr><td>High</td> <td><?= $okcoin_ticker_btc->ticker->high; ?></td> </tr>
                    <tr><td>Last</td> <td><?= $okcoin_ticker_btc->ticker->last; ?></td> </tr>
                    <tr><td>Buy</td> <td><?= $okcoin_ticker_btc->ticker->buy; ?></td> </tr>
                    <tr><td>Sell</td> <td><?= $okcoin_ticker_btc->ticker->sell; ?></td> </tr>
                    <tr><td>Volume</td> <td> <?= $okcoin_ticker_btc->ticker->vol; ?> </td> </tr>
                    <tr><td>Contract ID</td> <td> <?= $okcoin_ticker_btc->ticker->contract_id; ?></td></tr>
                    <tr><td>Unit Amount</td><td><?= $okcoin_ticker_btc->ticker->unit_amount; ?></td></tr>
                    <tr><td>Last Updated:</td><td><?= date('Y-m-d H:i:s', $okcoin_ticker_btc->date) ?></td></tr>
                </table>
            </div>
        </div>
    </div>
    <div class="columns col-lg-6 col-md-6">
        <div class="canvas-wrapper">
            <canvas class="main-chart col-lg-12" id="okcoin-chart" height="200" width="600"></canvas>
        </div>
    </div>
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-blue">
            <div class="panel-heading">OKCoin - Litecoin (LTC)</div>
            <div class="panel-body">
                <table width="100%">
                    <tr>
                        <th> Item </th> <th> Value </th>
                    </tr>
                    <tr><td>Low</td> <td><?= $okcoin_ticker_btc->ticker->low; ?></td> </tr>
                    <tr><td>High</td> <td><?= $okcoin_ticker_ltc->ticker->high; ?></td> </tr>
                    <tr><td>Last</td> <td><?= $okcoin_ticker_ltc->ticker->last; ?></td> </tr>
                    <tr><td>Buy</td> <td><?= $okcoin_ticker_ltc->ticker->buy; ?></td> </tr>
                    <tr><td>Sell</td> <td><?= $okcoin_ticker_ltc->ticker->sell; ?></td> </tr>
                    <tr><td>Volume</td> <td> <?= $okcoin_ticker_ltc->ticker->vol; ?> </td> </tr>
                    <tr><td>Contract ID</td> <td> <?= $okcoin_ticker_ltc->ticker->contract_id; ?></td></tr>
                    <tr><td>Unit Amount</td><td><?= $okcoin_ticker_ltc->ticker->unit_amount; ?></td></tr>
                    <tr><td>Last Updated:</td><td><?= date('Y-m-d H:i:s', $okcoin_ticker_ltc->date) ?></td></tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-orange">
            <div class="panel-heading">796 (BTC)</div>
            <div class="panel-body">
                <table width="100%">
                    <tr>
                        <th> Item </th> <th> Value </th>
                    </tr>
                    <tr><td>Low</td> <td></td></tr>
                    <tr><td>High</td> <td></td></tr>
                    <tr><td>Last</td> <td></td></tr>
                    <tr><td>Buy</td> <td></td></tr>
                    <tr><td>Sell</td> <td></td></tr>
                    <tr><td>Volume</td> <td> </td></tr>
                    <tr><td>Last Updated:</td><td> </td></tr>
                </table>            
            </div>
        </div>
    </div>
    <div class="columns col-lg-6 col-md-6">
        <div class="canvas-wrapper">
            <canvas class="main-chart col-lg-12" id="796-chart" height="200" width="600"></canvas>
        </div>
    </div>
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-orange">
            <div class="panel-heading">796 (LTC)</div>
            <div class="panel-body">
                <table width="100%">
                    <tr>
                        <th> Item </th> <th> Value </th>
                    </tr>
                    <tr><td>Low</td> <td></td></tr>
                    <tr><td>High</td> <td></td></tr>
                    <tr><td>Last</td> <td></td></tr>
                    <tr><td>Buy</td> <td></td></tr>
                    <tr><td>Sell</td> <td></td></tr>
                    <tr><td>Volume</td> <td> </td></tr>
                    <tr><td>Last Updated: </td> <td></td></tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-teal">
            <div class="panel-heading">BitVC (BTC)</div>
            <div class="panel-body">
                <table width="100%">
                    <tr>
                        <th> Item </th> <th> Value </th>
                    </tr>
                    <tr><td>Low</td> <td></td></tr>
                    <tr><td>High</td> <td></td></tr>
                    <tr><td>Last</td> <td></td></tr>
                    <tr><td>Buy</td> <td></td></tr>
                    <tr><td>Sell</td> <td></td></tr>
                    <tr><td>Volume</td> <td> </td></tr>
                    <tr><td>Last Updated: </td> <td></td></tr>
                </table>            
            </div>
        </div>
    </div>
    <div class="columns col-lg-6 col-md-6">
        <div class="canvas-wrapper">
            <canvas class="main-chart col-lg-12" id="bitvc-chart" height="200" width="600"></canvas>
        </div>
    </div>
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-teal">
            <div class="panel-heading">BitVC (LTC)</div>
            <div class="panel-body">
                <table width="100%">
                    <tr>
                        <th> Item </th> <th> Value </th>
                    </tr>
                    <tr><td>Low</td> <td></td></tr>
                    <tr><td>High</td> <td></td></tr>
                    <tr><td>Last</td> <td></td></tr>
                    <tr><td>Buy</td> <td></td></tr>
                    <tr><td>Sell</td> <td></td></tr>
                    <tr><td>Volume</td> <td> </td></tr>
                    <tr><td>Last Updated: </td><td></td></tr>
                </table>
            </div>
        </div>
    </div>
</div>



<script>
var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};

var okcoindata = {
    labels : [
        "A", "B", "C", "D", "E", "F", "G"
    ],
    datasets : [
        {
            label: "OKCoin: BTC",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()
            ]
        },
        {
            label: "OKCoin: LTC",
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [
               randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()
            ]
        }
    ]
}

var x796data = {
    labels : [
        "A", "B", "C", "D", "E", "F", "G"
    ],
    datasets : [
        {
            label: "OKCoin: BTC",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()
            ]
        },
        {
            label: "OKCoin: LTC",
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [
               randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()
            ]
        }
    ]
}

var bitvcdata = {
    labels : [
        "A", "B", "C", "D", "E", "F", "G"
    ],
    datasets : [
        {
            label: "OKCoin: BTC",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()
            ]
        },
        {
            label: "OKCoin: LTC",
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [
               randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()
            ]
        }    
    ]
}

window.onload = function() {
	var chart1 = document.getElementById("okcoin-chart").getContext("2d");
	window.myOKCoinChart = new Chart(chart1).Line(okcoindata, {
		responsive: true
	});
    
    var chart2 = document.getElementById("796-chart").getContext("2d");
    window.my796Chart = new Chart(chart2).Line(x796data, {
        responsive: true
    });
    
    var chart3 = document.getElementById("bitvc-chart").getContext("2d");
    window.myBitVCChart = new Chart(chart3).Line(bitvcdata, {
        responsive: true
    });
}
</script>