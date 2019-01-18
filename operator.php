<?php

require_once 'include/common.php';
require_once 'include/protect.php';

$dao = new pointDAO();
$leaderboard = $dao->retrieveAll();
$user_point = $dao->retrieveuser();
    
?>


<html>
    <body>
        <?php include 'include/header.php' ; ?>
        
        <h1><?php $user_point?>POINTS</h1>
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
                  <td>$user->name</td>
                  <td>$user->points</td>
              </tr>
              ";
              
          }
  ?>
          
          </table>

        </div>
    </body>
</html>
