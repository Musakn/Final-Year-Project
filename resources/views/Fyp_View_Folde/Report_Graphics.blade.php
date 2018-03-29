@extends('layout.app')
@section('Include.navbar')
@section('title','home')
@section('content')
<div class="Container">
	<div class="row">
		<div class="col-sm-10" style="margin-left: 130px;">
			<script>
window.onload = function () {

var options = {
	animationEnabled: true,
	title: {
		text: "Dynamic Disease Diagnose 2018"
	},
	axisY: {
		title: "Growth Rate (in %)",
		suffix: "%",
		includeZero: false
	},
	axisX: {
		title: "Web Portal"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#"%"",
		dataPoints: [
			{ label: "Child", y: 10.09 },	
			{ label: "Younger", y: 10.09},	
			{ label: "old", y: 10.09 },
			{ label: "", y: 10.09 },	
			{ label: "", y: 10.09 },
			{ label: "", y: 10.09 },
			{ label: "", y: 10.09 },
			{ label: "", y: 10.09 }
			
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
<div id="chartContainer" style="height: 300px; width: 100%;"></div> 

			
		</div>
	</div>
	

</div>
 
@endsection