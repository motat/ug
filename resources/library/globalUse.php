<div class='content'>
   <div class='padSmallx'>
      <h3>Compound Totals</h3>
      </br>
      <?php
         require_once('resources/config.php');
         $uid=$_SESSION['uid'];
         $sqlTot='SELECT compound, SUM(dose) FROM log WHERE uid=:uid GROUP BY compound';
         $stmtTot=$conn->prepare($sqlTot);
               $stmtTot->execute(array(
                  ':uid' => $uid));
               while($rowTot=$stmtTot->fetch()){
                  $compound=$rowTot['compound'];
                  $dose=$rowTot['SUM(dose)'];
                  echo "<span class='smallx'>".$compound." - <span class='blue'>".$dose."</span></span>
                        </br>";
               }
               $stmt=$conn->prepare($sql);
               $stmt->execute();
               ?>
            </div>
         </div>