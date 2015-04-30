<?php 
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

function sortOnID($a, $b) {
    return $a['id'] - $b['id'];
}


foreach(TableRegistry::get('Currencies')->find('all') as $currency) {
    if($currency->currency_name == "Bitcoin") {
        $btcID = $currency->id;
    } else if($currency->currency_name == "Litecoin") {
        $ltcID = $currency->id;
    }
}

foreach(TableRegistry::get('Sources')->find('all') as $source) {
    if(strtoupper($source->source_name) == "OKCOIN") {
        $OKCOIN_ID = $source->id;
    } else if(strtoupper($source->source_name) == "796") {
        $X796_ID = $source->id;
    }
}


$okcoin_btc = TableRegistry::get('Spotprices')->find('all', [
    'conditions' => ['currency_id' => $btcID, 'source_id' => $OKCOIN_ID],
    'limit' => 200,
])->order(['id' => 'DESC'])->toArray();

$x796_btc = TableRegistry::get('Spotprices')->find('all', [
    'conditions' => ['currency_id' => $btcID, 'source_id' => $X796_ID],
    'limit' => 200,
])->order(['id' => 'DESC'])->toArray();

usort($okcoin_btc, 'sortOnID');
usort($x796_btc, 'sortOnID');

?>
<script>
    function redraw() {
        $(document).ready(function() {            
            var chart1 = document.getElementById("btc-chart").getContext("2d");
            window.myBTCLine = new Chart(chart1).Line(window.btcChartData, {
                responsive: true
            });
        
            var chart2 = document.getElementById("ltc-chart").getContext("2d");
            window.myLTCLine = new Chart(chart2).Line(window.ltcChartData, {
                responsive: true
            });
        });
    }
</script>

<!-- BUTTONS ROW -->
<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <em class="glyphicon glyphicon-shopping-cart glyphicon-l"></em>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">120</div>
                    <div class="text-muted">New Futures Contracts</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <em class="glyphicon glyphicon-comment glyphicon-l"></em>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">52</div>
                    <div class="text-muted">Transactions Made</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <em class="glyphicon glyphicon-user glyphicon-l"></em>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">24</div>
                    <div class="text-muted">Positions Held</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <em class="glyphicon glyphicon-stats glyphicon-l"></em>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">25.2k</div>
                    <div class="text-muted">Profit/Loss</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LARGE BTC Ticker Graph -->
<div class="row">
	<div class="col-xs-12 col-md-6 col-lg-9">
        <div class="panel panel-info">
			<div class="panel-body tabs">
                <ul class="nav nav-pills">
					<li class="active"><a href="#tab1" data-toggle="tab" onclick="redraw()">Bitcoin</a></li>
					<li><a href="#tab2" data-toggle="tab" onclick="redraw()">Litecoin</a></li>
                    <li class="pull-right"><span><h3>Market Spot Prices</h3></span></li>
				</ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="btc-chart" height="200" width="600"></canvas>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <div class="canvas-wrapper">
                            <canvas class="main-chart" id="ltc-chart" height="200" width="600"></canvas>
                        </div>
                    </div>
                </div>
			</div>
        </div>
	</div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading"> OKCoin (BTC): </div>
                <div class="panel-body">
                    <table width="80%">
                        <tr>
                            <td>Low</td> <td class="pull-right">$<?= end($okcoin_btc)['low'] ?></td>
                        </tr>
                        <tr>
                            <td>High</td> <td class="pull-right">$<?= end($okcoin_btc)['high'] ?></td>
                        </tr>
                        <tr>
                            <td>Last</td> <td class="pull-right">$<?= end($okcoin_btc)['last'] ?></td>
                        </tr>
                        <tr>
                            <td>Buy</td> <td class="pull-right">$<?= end($okcoin_btc)['buy'] ?></td>
                        </tr>
                        <tr>
                            <td>Sell</td> <td class="pull-right">$<?= end($okcoin_btc)['sell'] ?></td>
                        </tr>
                        <tr>
                            <td>Volume</td> <td class="pull-right"><?= end($okcoin_btc)['volume'] ?></td>
                        </tr>
                        <tr>
                            <td>Time</td> <td class="pull-right"><?= end($okcoin_btc)['timestamp'] ?></td>
                        </tr>                   
                    </table>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading"> 796.com (BTC): </div>
                <div class="panel-body">
                    <table width="80%">
                        <tr>
                            <td>Low</td> <td class="pull-right">$<?= end($x796_btc)['low'] ?></td>
                        </tr>
                        <tr>
                            <td>High</td> <td class="pull-right">$<?= end($x796_btc)['high'] ?></td>
                        </tr>
                        <tr>
                            <td>Last</td> <td class="pull-right">$<?= end($x796_btc)['last'] ?></td>
                        </tr>
                        <tr>
                            <td>Buy</td> <td class="pull-right">$<?= end($x796_btc)['buy'] ?></td>
                        </tr>
                        <tr>
                            <td>Sell</td> <td class="pull-right">$<?= end($x796_btc)['sell'] ?></td>
                        </tr>
                        <tr>
                            <td>Volume</td> <td class="pull-right"><?= end($x796_btc)['volume'] ?></td>
                        </tr>
                        <tr>
                            <td>Time</td> <td class="pull-right"><?= end($x796_btc)['timestamp'] ?></td>
                        </tr>                   
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->

<!-- Pie Charts --> 
<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Slippage Stop Percentage:</h4>
                <div class="easypiechart" id="easypiechart-red" data-percent="27"><span class="percent">27%</span>
                <!--<canvas height="110" width="110"></canvas>--></div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Cover Ratio:</h4>
                <div class="easypiechart" id="easypiechart-teal" data-percent="56"><span class="percent">56%</span>
                <!--<canvas height="110" width="110"></canvas>--></div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Position Bias (Long):</h4>
                <div class="easypiechart" id="easypiechart-orange" data-percent="65"><span class="percent">65%</span>
                <!--<canvas height="110" width="110"></canvas>--></div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Recalculation Period:</h4>
                <div class="easypiechart" id="easypiechart-blue" data-percent="92"><span class="percent">92%</span>
                <!--<canvas height="110" width="110"></canvas>--></div>
            </div>
        </div>
    </div>



</div>

<script>
var window.btcChartData = {
    labels : [
        <?php 
            $i=0;
            foreach($okcoin_btc as $key => $price) {
                if($i % 6 == 0) {
                    echo "\"" . $price->timestamp . "\",";
                }
                $i++;
            }
        ?>
    ],
    datasets : [
        {
            label: "OKCoin Futures - Buy Price",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                <?php 
                foreach($okcoin_btc as $price) {
                    echo number_format($price->buy, 2) . ",";
                }
                ?>
            ]
        },
        {
            label: "OKCoin Futures - Sell Price",
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [
               <?php
                foreach($okcoin_btc as $price) {
                    echo number_format($price->sell, 2) . ", ";
                }
               ?>
            ]
        }
    ]
}

var window.ltcChartData = {
    labels : [
        <?php 
            $i=0;
            foreach($okcoin_btc as $key => $price) {
                if($i % 6 == 0) {
                    echo "\"" . $price->timestamp . "\",";
                }
                $i++;
            }
        ?>
    ],
    datasets : [
        {
            label: "OKCoin Futures - Buy Price",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                <?php 
                foreach($okcoin_btc as $price) {
                    echo $price->volume . ",";
                }
                ?>
            ]
        },
        {
            label: "OKCoin Futures - Sell Price",
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [
               <?php
                foreach($okcoin_btc as $price) {
                    echo number_format($price->sell, 2) . ", ";
                }
               ?>
            ]
        }
    ]
}

        
window.onload = function(){
	var chart1 = document.getElementById("btc-chart").getContext("2d");
	window.myBTCLine = new Chart(chart1).Line(window.btcChartData, {
		responsive: true
	});
    
    var chart2 = document.getElementById("ltc-chart").getContext("2d");
    window.myLTCLine = new Chart(chart2).Line(window.ltcChartData, {
        responsive: true
    });
    
    $(function() {
        $('#easypiechart-teal').easyPieChart({
            scaleColor: false,
            barColor: '#1ebfae'
        });
    });

    $(function() {
        $('#easypiechart-orange').easyPieChart({
            scaleColor: false,
            barColor: '#ffb53e'
        });
    });

    $(function() {
        $('#easypiechart-red').easyPieChart({
            scaleColor: false,
            barColor: '#f9243f'
        });
    });

    $(function() {
       $('#easypiechart-blue').easyPieChart({
           scaleColor: false,
           barColor: '#30a5ff'
       });
    });
}
</script>