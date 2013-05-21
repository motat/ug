<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$bug=$_POST['bug'];
$uid=$_SESSION['uid'];
$sql='INSERT INTO bug (bug) VALUES (:bug)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':bug' => $bug
	));
header("location:$root/record.php?bug=yes");