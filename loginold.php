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
         <div class='content'>
            <div class='padSmallx'>
               <h3>Login - Old</h3>
               </br>
               <!--<h5>Registration is currently not open</h5>-->
               <h5>It's not as complicated as it sounds</h5>
            </br>
              <h5>You are viewing this page because the password you currently have is encrypted using the old method. In order to encrypt it with the new method, please login here as you usually have, and then continue the steps on the next page to re-encrypt your password.</h5>
               </br>
               <div class='padSmallx'>
                  <form action='resources/library/loginold.php' method='POST'>
                     <input type='text' name='username' placeholder='username'></input>
                     <input type='password' name='password' placeholder='password'></input>
                     <button>Login</button>
                  </form>
               </div>
            </div>
         </div>
   </BODY>
</HTML>
