<?php
	require_once(realpath(dirname(__FILE__) . "/../config.php"));
	session_start();
	$suid=$_SESSION['uid'];
	$logid=$_POST['logid'];
	$dod=$_POST['date']; //day of dose
	$unit=$_POST['unit'];
	$title=$_POST['title'];
	$report=$_POST['report'];
	$compound=$_POST['compound'];
	$dose=$_POST['dose'];
	$sql='UPDATE log SET dod=?,unit=?,title=?,report=?,compound=?,dose=? WHERE logid=?';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($dod,$unit,$title,$report,$compound,$dose,$logid));
	header("location:$root/record.php?edit=yes");

?>