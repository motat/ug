<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$uid=$_SESSION['uid'];
$dod=$_POST['date']; //day of dose
$compound=$_POST['compound'];
$dose=$_POST['dose'];
$sql='INSERT INTO log (dod,compound,dose,uid) VALUES (:dod,:compound,:dose,:uid)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':dod' => $dod,
	':compound' => $compound,
	':dose' => $dose,
	':uid' => $uid
	));


?>
