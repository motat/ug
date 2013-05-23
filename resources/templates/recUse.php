<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
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
	$unit=$row['unit'];
	$logid=$row['logid'];
	echo "<span class='smallx'><a href='resources/library/delUse.php?id=".$logid."'>x </a>".$dod.": <span class='blue'>".$compound."(<span class='red'>".$dose."".$unit."</span>)</span></span>
		</br>";
}
?>

