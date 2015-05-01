<?php 
$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$okc_btc_future_depth = $okcoin_client->depthFutureApi(array(
    'symbol' => 'btc_usd', 
    'contract_type' => 'this_week', 
    'size' => 10
));

$okc_ltc_future_depth = $okcoin_client->depthFutureApi(array(
    'symbol' => 'ltc_usd', 
    'contract_type' => 'this_week',
    'size' => 10,
));

// echo "<pre>" . print_r($okc_btc_future_depth, TRUE) . "</pre>";

$okcoin_ask_prices = array();
$okcoin_ask_depths = array();
$okcoin_bid_prices = array();
$okcoin_bid_depths = array();


foreach($okc_btc_future_depth->asks as $ask) {
    $okcoin_ask_prices[] = $ask[0];
    $okcoin_ask_depths[] = $ask[1];
}


foreach($okc_btc_future_depth->bids as $bid) {
    $okcoin_bid_prices[] = $bid[0];
    $okcoin_bid_depths[] = $bid[1];
}

echo "Ask Depths<pre>" . print_r($okcoin_ask_depths, TRUE) . "</pre>";
echo "Bid Depths<pre>" . print_r($okcoin_bid_depths, TRUE) . "</pre>";
echo "Ask Prices<pre>" . print_r($okcoin_ask_prices, TRUE) . "</pre>";
echo "Bid Prices<pre>" . print_r($okcoin_bid_prices, TRUE) . "</pre>";
?>


<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">OKCoin - Bids (Depths)</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="okcoin-bids-depth-chart" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">OKCoin - Asks (Depths)</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="okcoin-asks-depth-chart" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->		

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">OKCoin Bids - Prices</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="okcoin-bids-prices-chart" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">OKCoin Asks - Prices</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="okcoin-asks-prices-chart" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->




<script>
var okcoin_ask_depths = {
    datasets : [
        {
            fillColor : "rgba(220,220,220,0.5)",
            strokeColor : "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data : [ <?= implode(", ", $okcoin_ask_depths); ?> ]
        },
    ]
}

var okcoin_bid_depths = {
    datasets : [
        {
            fillColor : "rgba(48, 164, 255, 0.2)",
            strokeColor : "rgba(48, 164, 255, 0.8)",
            highlightFill : "rgba(48, 164, 255, 0.75)",
            highlightStroke : "rgba(48, 164, 255, 1)",
            data : [ <?= implode(", ", $okcoin_bid_depths); ?> ]
        }
    ]
}

var okcoin_ask_prices = {
    datasets : [
        {
            label: "OKCoin: Ask Prices",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                <?= implode(", ", $okcoin_ask_prices); ?>
            ]
        },
    ]
}

var okcoin_bid_prices = {
    datasets : [
        {
            label: "OKCoin: Bid Prices",
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [
                <?= implode(", ",  $okcoin_bid_prices); ?>
            ]
        }
    ]
}

window.onload = function() {
     
    var chart1 = document.getElementById("okcoin-asks-depth-chart").getContext("2d");
    window.myOKCoinBarChart_ASK = new Chart(chart1).Bar(okcoin_ask_depths, {
        responsive: true
    });
    var chart2 = document.getElementById("okcoin-bids-depth-chart").getContext("2d");
	window.myOKCoinBarChart_BID = new Chart(chart2).Bar(okcoin_bid_depths, {
		responsive: true
	});
    
    var chart3 = document.getElementById("okcoin-asks-prices-chart").getContext("2d");
    window.myOKCoinLineChart_ASK = new Chart(chart3).Line(okcoin_ask_prices, {
        responsive: true
    });
    var chart4 = document.getElementById("okcoin-bids").getContext("2d");
    window.myOKCoinLineChart_BIKD = new Chart(chart4).Line(okcoin_bid_prices, {
        responsive: true
    });
    
}
</script>