<?php
session_start();
if(!isset($_SESSION['uid'])) {
   header("location:$root/login.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   	<HEAD>
      <TITLE>Record | ug.</TITLE>
      <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	    <script src="scripts/js.js"></script>
   	</HEAD>
   	<BODY>
<?php include_once("analyticstracking.php") ?>
   		<?php require_once('resources/templates/nav.php'); ?>
         <!--<div class='content'>
            <div class='padSmallx'>
               <h3>Compound Totals</h3>
               </br>
               <?php
               require_once('resources/config.php');
               $uid=$_SESSION['uid'];
               $sql='SELECT compound, SUM(dose) FROM log GROUP BY compound';
               $stmt=$conn->prepare($sql);
               $stmt->execute(array(
                  ':uid' => $uid));
               while($row=$stmt->fetch()){
                  $compound=$row['compound'];
                  $dose=$row['SUM(dose)'];
                  echo "<span class='smallx'>".$compound." - <span class='blue'>".$dose."</span></span>
                        </br>";
               }
               $stmt=$conn->prepare($sql);
               $stmt->execute();
               ?>
            </div>
         </div>-->
         <div class='content'>
            <div class='padSmallx'>
               <h3>Recent Uses</h3>
               <?php require_once('resources/templates/recUse.php'); ?>
               </br>
               </br>
               <span class='small'>Clicking the x next to the log will delete the entry</span>
               </br>
               </br>
               <span class='small'><a href='add.php?p=1'>add entry</span>
            </div>
         </div>
   </BODY>
</HTML>
