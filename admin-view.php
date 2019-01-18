<?php
require_once 'include/common.php';
require_once 'include/protect.php';
$dao = new OperatorDAO();
$operators = $dao->retrieveAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>SEARCH BAR</h1><br><br><br>

    <?php
        $i = 1;
        echo "<table border='1'>";
        foreach ($operators as $op) {
            echo "<tr>
                    <td>$i</td>
                    <td>$op->operator_name</td>
                    <td>$op->points</td>
                    <td><a href='edit.php?name={$op->operator_name}'>edit</a></td>
                
                </tr>";
            $i += 1;
        }
        echo "</table>";
        

    ?>
    
</body>
</html>