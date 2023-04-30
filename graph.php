<!DOCTYPE html>
<html>
<head>
	<title>Total Orders per Month</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
	<style>
		.container {
			width: 70%;
			margin: 15px auto;
		}

		body {
			text-align: center;
			color: green;
		}

		h2 {
			text-align: center;
			font-family: "Verdana", sans-serif;
			font-size: 30px;
		}
	</style>
</head>

<body>
	<div class="container">
		<h2>Total Orders per Month</h2>
		<div>
			<canvas id="myChart"></canvas>
		</div>
	</div>
</body>

<script>
	$(document).ready(function(){
		$.ajax({
			url: "graphData.php",
			method: "GET",
			success: function(data) {
				console.log(data);
				var month = [];
				var order_count = [];
                let array = JSON.parse(data, true);
                console.log(array);
                console.log(array[0].month);
                

				for(let i = 0; i < array.length; i++) {
                    console.log("Data Check");
					month.push(array[i].month);
					order_count.push(array[i].order_count);
					console.log(array[i].month);
				}

				var chartdata = {
					labels: month,
					datasets : [
						{
							label: "Total Orders",
							data: order_count,
							backgroundColor: "rgba(153,205,1,0.6)",
						}
					]
				};

				var ctx = $("#myChart");

				var barGraph = new Chart(ctx, {
					type: 'line',
					data: chartdata
				});
			},
			error: function(data) {
				console.log(data);
			}
		});
	});
</script>

</html>
