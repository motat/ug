<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
   	<HEAD>
      <TITLE>Drug Rec</TITLE>
      <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	    <script src="scripts/js.js"></script>
   	</HEAD>
   	<BODY>
   		<?php require_once('resources/templates/nav.php'); ?>
<?php
$p=$_GET['p'];
if($p == 1) { ?>
   <div class='content'>
      <div class='padSmallx'>
         <form action='resources/library/log.php' method='POST'>
            <input type='text' name='date' placeholder='January 1, 2013'></input>
            <input type='text' name='compound' placeholder='Mushrooms'></input>
            <input type='text' name='dose' placeholder='3.5g'></input>
            <button>Submit to Log</button>
         </form>        
      </div>
   </div>
<?php } ?>
<?php
$p=$_GET['p'];
if($p == 2) { ?>
   <div class='content'>
      <div class='padSmallx'>
         <form action='resources/library/bug.php' method='POST'>
            <h5>Please describe what you were doing, and on what page when you received an error. Any information is helpful, and thank you.</h5>
            <input type='text' name='bugs' placeholder='Bugs, kill them!'></input>
            <button>Report Bug</button>
         </form>        
      </div>
   </div>
<?php } ?>
   </BODY>
</HTML>
