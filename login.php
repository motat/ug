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
            if($m=='1'){
      ?>
      <div class='content'>
         <div class='padSmallx'>
            <span class='smallx red'>The username and password you entered was incorrect.</span>
         </div>
      </div>
      <?php
            }
         }
      ?>
      <div class='content'>
         <div class='padSmallx'>
            <h3>Login</h3>
            </br>
            <div class='padSmallx'>
               <form action='resources/library/login.php' method='POST'>
                  <input type='text' name='username' placeholder='username'></input>
                  <input type='password' name='password' placeholder='password'></input>
                  <button>Login</button>
               </form>
            </div>
            </br>
            </br>
            <span class='smallx'><a href='problems.php?p=login'>Problems logging in?</a></span>
         </div>
      </div>
   </BODY>
</HTML>
