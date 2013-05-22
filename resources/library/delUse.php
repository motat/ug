<?php
ob_start();
session_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$logid=$_GET['id'];
$sql='DELETE FROM log WHERE logid=:logid';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':logid' => $logid
	));
header("location:$root/record.php?del=yes");
?>