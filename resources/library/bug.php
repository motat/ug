<?php
ob_start();
session_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$bug=$_POST['bug'];
$uid=$_SESSION['uid'];
$sql='INSERT INTO bug (bug,uid) VALUES (:bug,:uid)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':bug' => $bug,
	':uid' => $uid
	));
header("location:$root/record.php?bug=yes");
?>