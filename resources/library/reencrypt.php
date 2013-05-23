<?php
ob_start();
session_start();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$uid=$_SESSION['uid'];
$username=$_POST['username'];
$password=$_POST['password'];
$str=substr($username,0,3);
$salt = '$2a$12$soPld43fs5lo09lMsjU'.$str.'$';
$crypter_pass = crypt($password, $salt);
$sql = 'UPDATE usr SET password=?, salt=? WHERE uid=?';
$stmt=$conn->prepare($sql);
$stmt->execute(array($crypter_pass,$salt,$uid));
header("location:$root/login.php?reg=yes");

?>
