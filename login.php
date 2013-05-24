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
               <h3>Login</h3>
               </br>
               <h5>I changed encryption methods for your password to give you an incredible boost in security</h5>
            </br>
               <h5>If you <span class='small'>experience problems</span> logging in, this is because your password is still set to the old encryption method. Please click <a href='loginold.php'>*here*</a> to login the old way, and then you will be allowed to renew your password and fix it. </h5>
               </br>
               <h5>If you still have problems, please message me <a href='http://reddit.com/u/bettytheboop'><span class='blue'>/u/bettytheboop</span></a>
               <div class='padSmallx'>
                  <form action='resources/library/login.php' method='POST'>
                     <input type='text' name='username' placeholder='username'></input>
                     <input type='password' name='password' placeholder='password'></input>
                     <button>Login</button>
                  </form>
               </div>
            </div>
         </div>
   </BODY>
</HTML>
