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

<div class="row">
	<div class="col-xs-12 col-md-6 col-lg-9">
        <div class="panel panel-success">
            <div class="panel-heading">Bitcoin Prices (OKCoin vs. 796)</div>
			<div class="panel-body">
				<div class="canvas-wrapper">
					<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
                </div>
			</div>
        </div>
	</div>
    <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="row">
            <div class="panel panel-warning">
                <div class="panel-heading"> OK Coin: </div>
                <div class="panel-body">
                    <table width="100%">
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
            <div class="panel panel-warning">
                <div class="panel-heading"> 796: </div>
                <div class="panel-body">
                    <table width="100%">
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
    </div>
</div><!--/.row-->

<script>
var lineChartData = {
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
            label: "OKCoin Futures - Last Price",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                <?php 
                foreach($okcoin_btc as $price) {
                    echo number_format($price->last, 2) . ",";
                }
                ?>
            ]
        },
        /*
        {
            label: "796 Futures - Last Price"
            fillColor : "rgba(220,220,220,0.2)",
            strokeColor : "rgba(220,220,220,1)",
            pointColor : "rgba(220,220,220,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(220,220,220,1)",
            data : [
                <?php 
                foreach($x796_btc as $price) {
                }
                ?>
            ]
        }
        */
    ]
}
        
window.onload = function(){
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true
	});
}
</script>