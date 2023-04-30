// Add the following code to your JavaScript file
$(document).ready(function () {
  // Fetch the data from the database using AJAX
  $.ajax({
    url: "fetch-order-data.php", // Replace with the path to your PHP file that fetches the data
    method: "POST",
    success: function (data) {
      var orderData = JSON.parse(data);
      // Create a chart with Chart.js library
      var ctx = document.getElementById("orderChart");
      var orderChart = new Chart(ctx, {
        type: "bar",
        data: {
          labels: orderData.labels,
          datasets: [
            {
              label: "Number of Orders",
              backgroundColor: "#4e73df",
              hoverBackgroundColor: "#2e59d9",
              borderColor: "#4e73df",
              data: orderData.data,
            },
          ],
        },
        options: {
          maintainAspectRatio: false,
          tooltips: {
            mode: "index",
            intersect: false,
          },
          responsive: true,
          scales: {
            xAxes: [
              {
                display: true,
                scaleLabel: {
                  display: true,
                  labelString: "Month",
                },
              },
            ],
            yAxes: [
              {
                display: true,
                ticks: {
                  beginAtZero: true,
                  stepSize: 1,
                },
                scaleLabel: {
                  display: true,
                  labelString: "Number of Orders",
                },
              },
            ],
          },
        },
      });
    },
    error: function (data) {
      console.log(data);
    },
  });
});
