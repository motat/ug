<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   <HEAD>
      <TITLE>Drug Rec</TITLE>
      <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
	   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	   <script src="scripts/js.js"></script>
   </HEAD>
   <BODY>
      <?php include_once("analyticstracking.php") ?>
   	<?php require_once('resources/templates/nav.php'); ?>
      <?php
         if(isset($_GET['m'])){
            $m=$_GET['m'];
            if($m=='exists'){
      ?>
      <div class='content'>
         <div class='padSmallx'>
            <span class='smallx red'>The username you tried registering, already exists.</span>
         </div>
      </div>
      <?php
            }
         }
      ?>
      <div class='content'>
         <div class='padSmallx'>
            <h3>Beta Registration</h3>
            </br>
            <h5><span class='blue'>ug.</span> is currently in beta developent phase. Problems might pop up and reporting them at the top right will help us immensly. </h5>
            </br>
            <h5>For better anonymity please use a username and password you've never used before</h5>
            <div class='padSmallx'>
               <form action='resources/library/reg.php' method='POST'>
                  <input type='text' name='username' placeholder='username'></input>
                  <input type='password' name='password' placeholder='password'></input>
                  <button>Create Account</button>
               </form>
            </div>
         </div>
      </div>
   </BODY>
</HTML>
