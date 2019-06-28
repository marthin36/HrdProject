<?php
$koneksi     = mysqli_connect("localhost", "root", "", "hrd_sql");
$penjualan      = mysqli_query($koneksi, "SELECT total FROM tbl_grafik order by id_grafik asc");
$merek = mysqli_query($koneksi, "SELECT posisi FROM tbl_grafik order by id_grafik asc");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo Grafik Batang</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 70%;
                margin: 25px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
            <canvas id="demobar" width="100" height="50"></canvas>
    </div>

      	<script  type="text/javascript">

    	  var ctx = document.getElementById("demobar").getContext("2d");
    	  var data = {
    	            labels: [<?php while ($p = mysqli_fetch_array($merek)) { echo '"' . $p['posisi'] . '",';}?>],
    	            datasets: [
    	            {
    	              label: "Grafik Jumlah Pegawai",
    	              data: [<?php while ($p = mysqli_fetch_array($penjualan)) { echo '"' . $p['total'] . '",';}?>],
                    backgroundColor: [
                      // "rgba(59, 100, 222, 1)",
                      // "rgba(203, 222, 225, 0.9)",
                      // "rgba(102, 50, 179, 1)",
                      // "rgba(201, 29, 29, 1)",
                      // "rgba(81, 230, 153, 1)",
                      // "rgba(246, 34, 19, 1)"]
											"#3c8dbc",
											"#3c8dbc",
											"#3c8dbc",
											"#3c8dbc",
											"#3c8dbc",
											"#3c8dbc",]
    	            }
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'bar',
    	            data: data,
    	            options: {
    	            barValueSpacing: 20,
    	            scales: {
    	              yAxes: [{
    	                  ticks: {
    	                      min: 0,
    	                  }
    	              }],
    	              xAxes: [{
    	                          gridLines: {
    	                              color: "rgba(0, 0, 0, 0)",
    	                          }
    	                      }]
    	              }
    	          }
    	        });
    	</script>

  </body>
</html>
