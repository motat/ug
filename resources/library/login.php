<?php
ob_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$username=$_POST['username'];
$password=$_POST['password'];
$sql='SELECT * FROM usr WHERE username=:username';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':username' => $username 
	));
	$row=$stmt->fetch();
	$salt=$row['salt'];
	$uid=$row['uid'];
	//$password=sha1($password.$salt);
	$crypter_pass=crypt($password, $salt);
$sql='SELECT COUNT(*) FROM usr WHERE username=? AND password=?';
$stmt=$conn->prepare($sql);
$stmt->execute(array($username,$crypter_pass));
$count=$stmt->fetchColumn();
if($count==1)
	{
		session_start();
		$_SESSION['uid']=$row['uid']; 
		header("location:$root/record.php?login=yes");
	}
	else
	{
		header("location:$root/login.php?m=1");
	}
?>
