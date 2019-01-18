<?php

require_once 'include/common.php';
require_once 'include/protect.php';

$dao = new OperatorDAO();
$leaderboard = $dao->retrieveAll();
$user_point = $dao->retrieve('amy');
    
?>


<html>
    <body>
        <?php include 'include/header.php' ; ?>
        
        <h1><?php echo $user_point->points;?> POINTS</h1>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <div class="col-md-6">
          <table class='table table-striped' id='leaderboard' border='1'>
              <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Points</th>
              </tr>
  <?php            
          foreach($leaderboard as $user) {
              echo "
              <tr>
                  <td>$user->rank</td>
                  <td>$user->operator_name</td>
                  <td>$user->points</td>
              </tr>
              ";
              
          }
  ?>
          
          </table>

          <a href="FAQ.php">FAQ</a>
          <a href="claim.php">Claim</a>
        </div>
    </body>
</html>
