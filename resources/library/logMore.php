<?php
ob_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
$uid=$_SESSION['uid'];
$dod=$_POST['date']; //day of dose
$unit=$_POST['unit'];
$title=$_POST['title'];
$report=$_POST['report'];
$compound=$_POST['compound'];
$dose=$_POST['dose'];
$sql='INSERT INTO log (dod,compound,dose,unit,title,report,uid) VALUES (?,?,?,?,?,?,?)';
$stmt=$conn->prepare($sql);
$stmt->execute(array($dod,$compound,$dose,$unit,$title,$report,$uid));
header("location:$root/record.php?log=yes");
?>
