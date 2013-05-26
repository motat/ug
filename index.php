<?php
  require_once('resources/config.php');
  $sql = 'SELECT DISTINCT compound FROM log';
  $result=$conn->prepare($sql);
  $result->execute();
  foreach ($result as $row) {
    $rowsString=array();
    $compound=$row['compound'];
    $sqlC='SELECT compound FROM log WHERE compound=?';
    $stmtC=$conn->prepare($sqlC);
    $stmtC->execute(array($compound));
    $count=$stmtC->rowCount();
    $rows[] = "['{$compound}',{$count}]";
  }
  $rowsString = implode(',',$rows);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
  <HEAD>
    <TITLE>Drug Rec</TITLE>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	  <script src="scripts/js.js"></script>
    <script type='text/javascript' src='http://www.google.com/jsapi'></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php echo $rowsString; ?>
        ]);

        var options = {
          title: 'Users Favorite Substances',
          backgroundColor: 'black',
          'titleTextStyle': { 'color': 'white' },
          'legend': { 'textStyle': { 'color': 'white' } }
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	  <style>
      body { background-color:black; }
      h1, h2, h3, h4, h5, h6 { color:white; font-family:helvetica; }
      input { background-color:black; border-color:white; color: white;}
    </style>
  </HEAD>
  <BODY>
    <?php include_once("analyticstracking.php") ?>
    <div class='padSmall'>
      <h4>Dr<span class='blue'>ug</span>record</h4>
    </div>
   	<div class='block'></div>
		<center>
			<div id='chart_div' style='width: 700px; height: 500px;'></div>
		</center>
		<div class='clear'></div>
		<center>
      <h3>A way to record your drug use anonymously and efficiently.</h3>
    </center>
		<div class='block'></div>
		<div class='bar'></div>
		<div class='padSmall'>
			<h5><a href='login.php'>Login</a> | <a href='register.php'>Register</a></h5>
		</div>
		<div class='block'></div>
  </BODY>
</HTML>