<div class="row">
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">OKCoin (BTC)</div>
            <div class="panel-body">

            </div>
        </div>
    </div>
    <div class="columns col-lg-6 col-md-6">
        <div class="canvas-wrapper">
            <canvas class="main-chart" id="okcoin-chart" height="200" width="600"></canvas>
        </div>
    </div>
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">OKCoin (LTC)</div>
            <div class="panel-body">

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">796 (BTC)</div>
            <div class="panel-body">
            
            </div>
        </div>
    </div>
    <div class="columns col-lg-6 col-md-6">
        <div class="canvas-wrapper">
            <canvas class="main-chart" id="796-chart" height="200" width="600"></canvas>
        </div>
    </div>
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">796 (LTC)</div>
            <div class="panel-body">

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">BitVC (BTC)</div>
            <div class="panel-body">
            
            </div>
        </div>
    </div>
    <div class="columns col-lg-6 col-md-6">
        <div class="canvas-wrapper">
            <canvas class="main-chart" id="bitvc-chart" height="200" width="600"></canvas>
        </div>
    </div>
    <div class="columns col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">BitVC (LTC)</div>
            <div class="panel-body">

            </div>
        </div>
    </div>
</div>



<script>
window.okcoindata = {
    labels : [
        "A", "B", "C", "D"
    ],
    datasets : [
        {
            label: "OKCoin: BTC",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                1,2,3,4
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
               4,3,2,1
            ]
        }
    ]
}

window.796data = {
    labels : [
        "A", "B", "C", "D"
    ],
    datasets : [
        {
            label: "OKCoin: BTC",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                1,2,3,4
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
               4,3,2,1
            ]
        }
    ]
}

window.bitvcdata = {
    labels = [
        "A", "B", "C", "D"
    ],
    datasets : [
        {
            label: "OKCoin: BTC",
            fillColor : "rgba(48, 164, 255, 0.2)",
			strokeColor : "rgba(48, 164, 255, 0.8)",
			highlightFill : "rgba(48, 164, 255, 0.75)",
			highlightStroke : "rgba(48, 164, 255, 1)",
            data : [
                1,2,3,4
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
               4,3,2,1
            ]
        }    
    ]
}

window.onload = function() {
	var chart1 = document.getElementById("okcoin-chart").getContext("2d");
	window.myOKCoinChart = new Chart(chart1).Line(window.okcoindata, {
		responsive: true
	});
    
    var chart2 = document.getElementById("796-chart").getContext("2d");
    window.my796Chart = new Chart(chart2).Line(window.796data, {
        responsive: true
    });
    
    var chart3 = document.getElementById("bitvc-chart").getContext("2d");
    window.myBitVCChart = new Chart(chart3).Line(window.bitvcdata, {
        responsive: true
    });
}
</script>