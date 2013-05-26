<?php
	ob_start();
	session_start();
	require_once(realpath(dirname(__FILE__) . "/../config.php"));
	$logid=$_GET['id'];
	$uid=$_SESSION['uid'];
	$sql='DELETE FROM log WHERE logid=? AND uid=?';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($logid,$uid));
	header("location:$root/record.php?del=yes");
?>