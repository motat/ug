<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();

$uid=$_SESSION['uid'];
$sql='SELECT * FROM log WHERE uid=:uid ORDER BY logid ASC';
$stmt=$conn->prepare($sql);
$stmt->execute(array(
	':uid' => $uid
	));	
while($row=$stmt->fetch())
{
	$dod=$row['dod'];
	$compound=$row['compound'];
	$dose=$row['dose'];
	echo "<span class='smallx'>".$dod.": <span class='blue'>".$compound."(<span class='red'>".$dose."</span>)</span></span>
		</br>";
}
?>

