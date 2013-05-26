<?php
  session_start();
  $uid=$_SESSION['uid'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
  <HEAD>
    <TITLE>Drug Rec</TITLE>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
      $(function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-m-dd' });
      });
    </script>
  </HEAD>
  <BODY>
    <?php include_once("analyticstracking.php") ?>
    <?php require_once('resources/templates/nav.php'); ?>
    <?php
      $logid=$_GET['id'];
      $euid=$_GET['uid'];
      if($euid != $uid){
        header("location:$root/record.php");
      }
      require_once("resources/config.php");
      $sql='SELECT * FROM log WHERE logid=? AND uid=?';
      $stmt=$conn->prepare($sql);
      $stmt->execute(array($logid,$uid));
      $row=$stmt->fetch();
      $dod=$row['dod'];
      $dose=$row['dose'];
      $title=$row['title'];
      $report=$row['report'];
    ?>
    <div class='content'>
      <div class='padSmallx'>
        <form action='resources/library/editUse.php' method='POST'>
          <div class='colFull'>
            <input type='text' name='date' id='datepicker' value='<?php echo $dod; ?>'></input>
          </div>
          </br>
          <div class='colFull'>
            <select name='compound'>
              <?php require_once('resources/templates/listCompound.php');?>
            </select>
          </div>
          </br>
          <div class='colLarge left'>
            <input type='text' placeholder='Dose' name='dose' value='<?php echo $dose;  ?>'></input>
          </div>
          <div class='colSmall right'>
            <select name='unit'>
              <?php require_once('resources/templates/listUnit.php'); ?>
            </select>
          </div>
          <div class='clear'></div>
          </br>
          <div class='colFull'>
            <input type='text' name='title' placeholder='Trip Title' value='<?php echo $title; ?>'></input>
          </div>
          </br>
          <textarea name="report" placeholder='Report' cols="25" rows="5"><?php echo $report; ?></textarea>
          </br>
            <input type='hidden' name='logid' value='<?php echo $logid; ?>'></input>
          <div class='right'>
            <!--<span class='small'><a href='add.php?p=1'>less recording options</a></span>-->
          </div>
          <div class='clear'></div>
          </br>
          <button>Edit</button>
          </br>
          </br>
          </form>        
        </div>
      </div>
   </BODY>
</HTML>
