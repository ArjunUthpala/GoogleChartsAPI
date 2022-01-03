<?php
    require("connection.php");

    ?>

<html>
  <head>
    <script
      type="text/javascript"
      src="https://www.gstatic.com/charts/loader.js"
    ></script>
    <script type="text/javascript">
      google.charts.load("current", { packages: ["corechart"] });
      google.charts.setOnLoadCallback(drawChart);

      /*var x = 5;
      var y = 6;*/

      function drawChart() {
        var data = google.visualization.arrayToDataTable([/*
          ["Task", "Hours per Day"],
          ["Work", x],
          ["Eat", y],
          ["Commute", 2],
          ["Watch TV", 2],
          ["Sleep", 7],*/
          ['Name','Votes'],
          <?php 


$query = "SELECT * from election";

			 $exec = mysqli_query($conn,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['Fname']."',".$row['Votes']."],";
			 }
			 ?> 
        ]);

        var options = {
          title: "Vote",
        };

        var chart = new google.visualization.PieChart(
          document.getElementById("piechart")
        );

        chart.draw(data, options);
      }

      
    </script>

  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px"></div>
  </body>
</html>
