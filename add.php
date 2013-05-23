<?php
session_start();
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
if($p == 1) { ?>
   <div class='content'>
      <div class='padSmallx'>
         <form action='resources/library/log.php' method='POST'>
            <div class='colFull'>
               <input type='text' name='date' id='datepicker' placeholder='Date'></input>
            </div>
             </br>
            <div class='colFull'>
               <select name='compound'>
                  <option value='LSD'>LSD</option>
                  <option value='Mushrooms'>Mushrooms</option>
                  <option value='MDMA'>MDMA</option>
                  <option value='Cannabis'>Cannabis</option>
                  <option value='Alcohol'>Alcohol</option>
                  <option value='Cocaine'>Cocaine</option>
                  <option value='Methamphetamine'>Methamphetamine</option>
                  <option value='Amphetamine'>Amphetamine</option>
                  <option value='Heroin'>Heroin</option>
                  <option value='Spice'>Spice</option>
         		</select>
            </div>
            </br>
               <div class='colLarge left'>
                  <input type='text' name='dose' placeholder='150'></input>
               </div>
           
               <div class='colSmall right'>
                  <select name='unit'>
                     <option value='ug'>ug</option>
                     <option value='mg'>mg</option>
                     <option value='g'>g</option>
                     <option value='ml'>ml</option>
                     <option value='oz'>oz</option>
                  </select>
               </div>
            <div class='clear'></div>
            </br>
            <span class='smallx'>Are you looking for a compound or unit measurment system that's not on the list? Submit it <a href='add.php?p=2'>*here*</a></span>
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
            <input type='text' name='bug' placeholder='Bugs, kill them!'></input>
            <button>Report Bug</button>
         </form>        
      </div>
   </div>
<?php } ?>
<?php
$p=$_GET['p'];
if($p == 3) { ?>
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
   </BODY>
</HTML>
