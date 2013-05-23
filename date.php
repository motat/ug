<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));

$sql = 'SELECT * FROM log'
$stmt=$conn->prepare($sql);
$stmt->execute();

while($row = $stmt->fetchAll()) {
  echo $row['dod'] . "\t" . $row['compound']. "\n";
}

?>