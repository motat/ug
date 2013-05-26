<?php
  session_start();
//make sure people not logged in can't submit logs
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
      $p=$_GET['p'];
      if($p == 1) { 
    ?>
    <div class='content'>
      <div class='padSmallx'>
        <form action='resources/library/log.php' method='POST'>
          <div class='colFull'>
            <input type='text' name='date' id='datepicker' placeholder='Date'></input>
          </div>
          </br>
          <div class='colFull'>
            <select name='compound'>
              <?php require_once('resources/templates/listCompound.php');?>
         		</select>
          </div>
          </br>
          <div class='colLarge left'>
            <input type='text' name='dose' placeholder='150'></input>
          </div>
          <div class='colSmall right'>
            <select name='unit'>
              <?php require_once('resources/templates/listUnit.php'); ?>
            </select>
          </div>
          <div class='clear'></div>
          </br>
          <div class='right'>
            <span class='small'><a href='add.php?p=4'>more recording options</a></span>
          </div>
          <div class='clear'></div>
          </br>
          <button>Submit to Log</button>
          </br>
          </br>
          <span class='smallx'>Substance or Unit missing? Submit it <a href='add.php?p=2'>*here*</a></span>
          </br>
        </form>        
      </div>
    </div>
    <?php } ?>
    <?php
      $p=$_GET['p'];
      if($p == 2) { 
    ?>
    <div class='content'>
      <div class='padSmallx'>
        <form action='resources/library/bug.php' method='POST'>
          <h5>Please describe what you were doing, and on what page when you received an error. Any information is helpful, and thank you.</h5>
          <input type='text' name='bug' placeholder='Bugs, kill them!'></input>
          <button>Report Bug</button>
        </form>        
      </div>
    </div>
    <?php } ?>
    <?php
      $p=$_GET['p'];
      if($p == 3) { 
    ?>
    <div class='content'>
      <div class='padSmallx'>
        <form action='resources/library/reencrypt.php' method='POST'>
          <h5>Please type in your username and password. Once you submit this form, your password with be re-encrypted and you will be able to normally login again</h5>
          <input type='text' name='username' placeholder='username'></input>
          <input type='password' name='password' placeholder='password'></input>
          <button>Report Bug</button>
        </form>        
      </div>
    </div>
    <?php } ?>
    <?php
      $p=$_GET['p'];
      if($p == 4) { 
    ?>
    <div class='content'>
      <div class='padSmallx'>
        <form action='resources/library/logMore.php' method='POST'>
          <div class='colFull'>
            <input type='text' name='date' id='datepicker' placeholder='Date'></input>
          </div>
          </br>
          <div class='colFull'>
            <select name='compound'>
              <?php require_once('resources/templates/listCompound.php');?>
            </select>
          </div>
          </br>
          <div class='colLarge left'>
            <input type='text' name='dose' placeholder='150'></input>
          </div>
          <div class='colSmall right'>
            <select name='unit'>
              <?php require_once('resources/templates/listUnit.php'); ?>
            </select>
          </div>
          <div class='clear'></div>
          </br>
          <div class='colFull'>
            <input type='text' name='title' placeholder='Trip Title'></input>
          </div>
          </br>
          <textarea name="report" cols="25" rows="5">Report</textarea>
          </br>
          <div class='right'>
            <span class='small'><a href='add.php?p=1'>less recording options</a></span>
          </div>
          <div class='clear'></div>
          </br>
          <button>Submit to Log</button>
          </br>
          </br>
          <span class='smallx'>Substance or Unit missing? Submit it <a href='add.php?p=2'>*here*</a></span>
          </br>
          </form>        
        </div>
      </div>
      <?php } ?>
    <?php
      $p=$_GET['p'];
      if($p == 'f') { 
    ?>
    <div class='content'>
      <div class='padSmallx'>
        <h3>Feedback</h3>
        <div class='padSmallx'>
          <span class='smallx'>
            </br>
            <li>Features you'd like to see here</li>
            <li>Comments or critiques</li>
            <li>Describe your user experience</li>
            <li>Any other feedback...</li>
            </br>
          </span>
        </div>
        <form action='resources/library/reencrypt.php' method='POST'>
          <textarea name="bug" cols="25" rows="5"></textarea>
          <button>Report Bug</button>
        </form>        
      </div>
    </div>
    <?php } ?>
   </BODY>
</HTML>
