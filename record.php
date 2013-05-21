<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
session_start();
?>
<HTML>
   	<HEAD>
      <TITLE>Drug Rec</TITLE>
      <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	    <script src="scripts/js.js"></script>
   	</HEAD>
   	<BODY>
   		<?php require_once('resources/templates/nav.php'); ?>
         <!--<div class='content'>
            <div class='padSmallx'>
               <h3>Compound Count</h3>
               </br>
               <span class='smallx'>LSD - <span class='blue'>1,500ug</span></span>
            </br>
               <span class='smallx'>MDMA - <span class='blue'>300mg</span></span>
            </div>
         </div>-->
         <div class='content'>
            <div class='padSmallx'>
               <h3>Recent Uses</h3>
               <?php require_once('resources/templates/recUse.php'); ?>
               </br>
               </br>
               <span class='small'><a href='add.php?p=1'>add entry</span>
            </div>
         </div>
   </BODY>
</HTML>