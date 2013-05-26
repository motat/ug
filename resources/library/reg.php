<?php
ob_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$username=$_POST['username'];
//$salt=md5($username);
//$salt=substr($salt,0,22);
$password=$_POST['password'];
//$password=sha1($password.$salt);

//Check if username exists
$sqlCh='SELECT username FROM usr WHERE username=?';
$stmtCh=$conn->prepare($sqlCh);
$stmtCh->execute(array($username));
if($stmtCh->rowCount() > 0){ //if username exists then create it
	header("location:$root/register.php?m=exists");
}
else{
	$str = substr($username, 0, 3);
	$salt = '$2a$12$soPld43fs5lo09lMsjU'.$str.'$';
	$crypter_pass = crypt($password, $salt);

	$sql='INSERT INTO usr (username,password,salt) VALUES (?,?,?)';
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($username,$crypter_pass,$salt));
	header("location:$root/login.php?reg=yes");
}
?>