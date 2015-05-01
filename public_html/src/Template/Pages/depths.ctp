<?php 
$okcoin_client = new OKCoin(
    new OKCoin_ApiKeyAuthentication($ok_api_key, $ok_secret_key)
);

$okc_btc_future_depth = $okcoin_client->depthFutureApi(array(
    'symbol' => 'btc_usd', 
    'contract_type' => 'this_week', 
    'size' => 20
));

$okc_ltc_future_depth = $okcoin_client->depthFutureApi(array(
    'symbol' => 'ltc_usd', 
    'contract_type' => 'this_week',
    'size' => 30,
));

$okcoin_ask_prices = array();
$okcoin_ask_depths = array();
$okcoin_bid_prices = array();
$okcoin_bid_depths = array();


foreach($okc_btc_future_depth->asks as $ask) {
    $okcoin_ask_prices[] = $ask[0];
    $okcoin_ask_depths[] = $ask[1];
    

    if(!isset($max_depth) || $max_depth == "") {
        $max_depth = $ask[1];
    }     
    if($ask[1] > $max_depth) {
        $max_depth = $ask[1];
    }   
}


foreach($okc_btc_future_depth->bids as $bid) {
    $okcoin_bid_prices[] = $bid[0];
    $okcoin_bid_depths[] = $bid[1];
    
    if(!isset($max_price) || $max_price == "") {
        $max_price = $bid[0];
    }
    if($bid[0] > $max_price) {
        $max_price = $bid[0];
    }
}


echo "MAX PRICE: " . $max_price;
echo "MAX DEPTH: " . $max_depth;
?>

<div class="panel panel-info">
    <div class="panel-body tabs">
        <div class="col-lg-12">
            <ul class="nav nav-pills">
                <li class="pull-left"><span><h4> Bitcoin </h4></span></li>
                <li class="active"><a href="#tab1" data-toggle="tab" onclick="redraw()">OKCoin</a></li>
                <li><a href="#tab2" data-toggle="tab" onclick="redraw()">796.com</a></li>
                <li><a href="#tab3" data-toggle="tab" onclick="redraw()">BitVC</a></li>
                <li><span><h4> Litecoin </h4></span></li>
                <li><a href="#tab4" data-toggle="tab" onclick="redraw()">OKCoin</a></li>
                <li><a href="#tab5" data-toggle="tab" onclick="redraw()">796.com</a></li>
                <li><a href="#tab6" data-toggle="tab" onclick="redraw()">BitVC</a></li>
                <li class="pull-right"><span><h3>Futures Market Depth</h3></span></li>
            </ul>
        </div>
               
        
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <div class="columns col-lg-6">
                                BTC Market Depth - Bids Vs. Asks (Quantity)
                            </div>
                            
                            <div class="columns col-lg-6">
                                <div class="row"><span style="color: rgba(48,164,255,1.0); background-color: rgba(48, 164, 255, 0.2)" class="pull-right badge">Asks</span></div>
                                <div class="row"><span style="color: rgba(255,181,62,0.8); background-color: rgba(220,220,220,0.5)" class="pull-right badge">Bids</span></div>
                            </div>
                        
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-6 canvas-wrapper">
                                <canvas class="main-chart" id="okcoin-asks-depth-chart" height="200" width="600"></canvas>    
                            </div>
                            
                            <div class="col-lg-6 canvas-wrapper">
                                <canvas class="main-chart" id="okcoin-bids-depth-chart" height="200" width="600"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading"> 
                            <div class="columns col-lg-6">
                                BTC Market Depth - Bids vs. Asks (Prices) 
                            </div>
                            
                            <div class="columns col-lg-6">
                                <div class="row"><span style="color: rgba(48,164,255,1.0); background-color: rgba(48, 164, 255, 0.2)" class="pull-right badge">Asks</span></div>
                                <div class="row"><span style="color: rgba(255,181,62,0.8); background-color: rgba(220,220,220,0.5)" class="pull-right badge">Bids</span></div>
                            </div>
                        </div>    
                        <div class="panel-body">
                            <div class="col-lg-6 canvas-wrapper">
                                <canvas class="main-chart" id="okcoin-asks-prices-chart" height="200" width="600"></canvas>
                            </div>
                            <div class="col-lg-6 canvas-wrapper">
                                <canvas class="main-chart" id="okcoin-bids-prices-chart" height="200" width="600"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="tab2">
            
            </div>
            
            <div class="tab-pane fade" id="tab3">
            
            </div>
            
            <div class="tab-pane fade" id="tab4">
            
            </div>
            <div class="tab-pane fade" id="tab5">
            
            </div>
            <div class="tab-pane fade" id="tab6">
            
            </div>         
        </div>
    </div>
</div>






<script>
var okcoin_ask_depths = {
    labels: [
        <?= implode(", ", $okcoin_ask_prices); ?>
    ],
    datasets : [
        {
            fillColor : "rgba(48, 164, 255, 0.2)",
            strokeColor : "rgba(48, 164, 255, 0.8)",
            highlightFill : "rgba(48, 164, 255, 0.75)",
            highlightStroke : "rgba(48, 164, 255, 1)",
            data : [ <?= implode(", ", $okcoin_ask_depths); ?> ]
        },
    ]
}

var okcoin_bid_depths = {
    labels : [
        <?= implode(", ", array_reverse($okcoin_bid_prices)); ?>
    ],
    datasets : [
        {
            fillColor : "rgba(255,181,62,0.5)",
            strokeColor : "rgba(255,181,62,0.8)",
            highlightFill: "rgba(255,181,62,0.75)",
            highlightStroke: "rgba(255,181,62,1)",
            data : [ <?= implode(", ", array_reverse($okcoin_bid_depths)); ?> ]
        }
    ]
}

var okcoin_ask_prices = {
    labels : [
        <?= implode(", ", $okcoin_ask_depths); ?>
    ],
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
    labels : [
        <?= implode(", ", array_reverse($okcoin_bid_depths)); ?>
    ],
    datasets : [
        {
            label: "OKCoin: Bid Prices",
            fillColor : "rgba(255,181,62,0.2)",
            strokeColor : "rgba(255,181,62,1)",
            pointColor : "rgba(255,181,62,0.75)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(255,181,62,1)",
            data : [
                <?= implode(", ",  array_reverse($okcoin_bid_prices)); ?>
            ]
        }
    ]
}

window.onload = function() {
    var steps = 10;
    var max_price = <?= $max_price ?>;
    var max_depth = <?= $max_depth ?>;

    var chart1 = document.getElementById("okcoin-asks-depth-chart").getContext("2d");
    window.myOKCoinBarChart_ASK = new Chart(chart1).Bar(okcoin_ask_depths, {
        responsive: true,
        scaleOverride: true,
        scaleSteps: steps,
        scaleStepWidth:  Math.ceil(max_depth / steps),
        scaleStartValue: 0, 
    });
    
    var chart2 = document.getElementById("okcoin-bids-depth-chart").getContext("2d");
	window.myOKCoinBarChart_BID = new Chart(chart2).Bar(okcoin_bid_depths, {
		responsive: true,
        scaleOverride: true,
        scaleSteps: steps,
        scaleStepWidth:  Math.ceil(max_depth / steps),
        scaleStartValue: 0, 
        
    });
    
    var chart3 = document.getElementById("okcoin-asks-prices-chart").getContext("2d");
    window.myOKCoinLineChart_ASK = new Chart(chart3).Line(okcoin_ask_prices, {
        responsive: true,
        scaleOverride: true,
        scaleSteps: steps,
        scaleStepWidth:  Math.ceil(max_price / steps),
        scaleStartValue: 0, 
    });
    var chart4 = document.getElementById("okcoin-bids-prices-chart").getContext("2d");
    window.myOKCoinLineChart_BIKD = new Chart(chart4).Line(okcoin_bid_prices, {
        responsive: true,
        scaleOverride: true,
        scaleSteps: steps,
        scaleStepWidth:  Math.ceil(max_price / steps),
        scaleStartValue: 0, 
    });
    
}
</script>