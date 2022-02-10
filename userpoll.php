<!DOCTYPE html>
<html>


<head>
<title>User_poll</title>
    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Vote', 'Vote Per Student'],
                ['Narayan', 8],
                ['Prasad', 2],

            ]);

            // Optional; add a title and set the width and height of the chart
            var options = { 'title': 'Voting Result', 'width': 550, 'height': 400, };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</head>


<body>

<?php
session_start();
include('db_connect.php');

if(isset($_SESSION['adminname']))
{

  //$GLOBALS['u'] = $_SESSION['manager'];
  $u=$_SESSION['adminname'];
  echo $u;
}
?>
<center>
<table border="1" ><tr><th style="text-align:center">Student_Name</th><th style="text-align:center">Party Name</th></tr>
				
			<?php 
			  
				$ret=mysqli_query($conn,"SELECT * FROM vote");
				$num=mysqli_fetch_array($ret);

              if($num>0)
              {
                
                  ?>
                  <tr>
                      <td><?php echo $num['username']; ?></td>                      
                      <td><?php echo $num['pname']; ?></td>					  
                  <?php
           
                
                echo "</tr></table></div>";
              }
               
	
			  
              ?>

</center>
</body>

</html>