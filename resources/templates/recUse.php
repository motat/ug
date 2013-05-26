<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
$uid=$_SESSION['uid'];
$sql='SELECT * FROM log WHERE uid=:uid ORDER BY dod DESC';
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
  $title=$row['title'];
  $report=$row['report'];
  echo "
    <div class='colLarge borderTop'>
          <div class='padSmallx'>
            <div id='logDate'>
              <span class='smallx'>".$dod."</span>
              </br>
              </br>
              </br>
              <span class='smallx fButton'><a href='resources/library/delUse.php?id=".$logid."'>delete </a></span> &nbsp;<span class='smallx fButton'><a href='edit.php?id=".$logid."&uid=".$uid."'>edit</a></span>
            </div>
            <div id='logInfo'>
              <span class='medium blue'>".$compound."</span>
              </br>
              <span class='smallx red'>".$dose.$unit."</span>
              </br>
              </br>
              <h5>".$title."</h5>
              </br>
              <span class='smallx'>".$report."</span>
            </div>
            <div class='clear'></div>
          </div>
        </div>";
}
?>

