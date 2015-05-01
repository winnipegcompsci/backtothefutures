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

echo "<h1> Asks </h1>";
foreach($okc_btc_future_depth->asks as $ask) {
    echo "<pre>" . print_r($ask, TRUE) . "</pre>";
}

echo "<h2> Bids </h2>";
foreach($okc_btc_future_depth->bids as $bid) {
    echo "<pre>" . print_r($bid, TRUE) . "</pre>";
}

?>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Bar Chart</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="okcoin-bar-chart" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->		

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Line Chart</div>
            <div class="panel-body">
                <div class="canvas-wrapper">
                    <canvas class="main-chart" id="okcoin-line-chart" height="200" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->




<script>
var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};

var okcoin_bar_data = {
    labels : ["January","February","March","April","May","June","July"],
    datasets : [
        {
            fillColor : "rgba(220,220,220,0.5)",
            strokeColor : "rgba(220,220,220,0.8)",
            highlightFill: "rgba(220,220,220,0.75)",
            highlightStroke: "rgba(220,220,220,1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        },
        {
            fillColor : "rgba(48, 164, 255, 0.2)",
            strokeColor : "rgba(48, 164, 255, 0.8)",
            highlightFill : "rgba(48, 164, 255, 0.75)",
            highlightStroke : "rgba(48, 164, 255, 1)",
            data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
        }
    ]
}

var okcoin_line_data = {
    labels : [
        "A", "B", "C", "D", "E", "F", "G"
    ],
    datasets : [
        {
            label: "OKCoin: Bids",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()
            ]
        },
        {
            label: "OKCoin: Asks",
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
    var chart1 = document.getElementById("okcoin-bar-chart").getContext("2d");
    window.myOKCoinBarChart = new Chart(chart1).Bar(okcoin_bar_data, {
        responsive: true
    });
    var chart2 = document.getElementById("okcoin-line-chart").getContext("2d");
	window.myOKCoinLineChart = new Chart(chart2).Line(okcoin_line_data, {
		responsive: true
	});

}
</script>