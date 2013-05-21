<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));

$username=$_POST['username'];
$salt=md5($username);
$salt=substr($salt,0,22);
$password=$_POST['password'];
$password=sha1($password.$salt);	
$sql='INSERT INTO usr (username,password,salt) VALUES (:username, :password, :salt)';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':username' => $username,
	':password' => $password,
	':salt' => $salt
	));

?>
