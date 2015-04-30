<div class="row">
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-blue">
            <div class="panel-heading">OKCoin (BTC)</div>
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
                    <tr><td colspan=2>Last Updated: </td></tr>
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
            <div class="panel-heading">OKCoin (LTC)</div>
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
                    <tr><td colspan=2>Last Updated: </td></tr>
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
                    <tr><td colspan=2>Last Updated: </td></tr>
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
                    <tr><td colspan=2>Last Updated: </td></tr>
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
                    <tr><td colspan=2>Last Updated: </td></tr>
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
                    <tr><td colspan=2>Last Updated: </td></tr>
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