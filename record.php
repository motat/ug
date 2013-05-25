<?php
  session_start();
  require_once('resources/config.php');
  if(!isset($_SESSION['uid'])) {
     header("location:$root/login.php");
  }
  $uid=$_SESSION['uid'];
  $sql = 'SELECT DISTINCT compound FROM log WHERE uid=?';
  $result=$conn->prepare($sql);
  $result->execute(array($uid));
  foreach ($result as $row) {
    $compound=$row['compound'];
    $sqlC='SELECT compound FROM log WHERE compound=? AND uid=?';
    $stmtC=$conn->prepare($sqlC);
    $stmtC->execute(array($compound,$uid));
    $count=$stmtC->rowCount();
    $rows[] = "['{$compound}',{$count}]";
  }
  $rowsString = implode(',',$rows);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
  <HEAD>
    <TITLE>Record | ug.</TITLE>
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
            title: 'Total Uses'
          };

          var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
          chart.draw(data, options);
        }
    </script>
  </HEAD>
  <BODY> 
    <?php include_once("analyticstracking.php") ?>
    <?php require_once('resources/templates/nav.php'); ?>
    <div class='blockSmall'></div>
    <div class='colMedium borderThick'>
      <div class='padSmallx'>
        <div id='chart_div' style='width: 90%; height: 400px;'></div>
      </div>
    </div>
    </br>
    <div class='colMedium borderThick'>
        <div class='right'>
          <div class='padSmallx'>
            <span class='fButton'><a href='add.php?p=1'>add entry</a></span>
          </div>
        </div>
      <div class='padSmallx'>
        <h3>Log</h3>
        </br>
        </br>
        </br>
        <?php require_once('resources/templates/recUse.php'); ?>
        </br>
        </br>
        <span class='small'> x - delete entry</span>
        </br>
        </br>
      </div>
    </div>
  </BODY>
</HTML>
