<?php
require_once 'include/common.php';
require_once 'include/protect.php';
$dao = new RecordDAO();
$records= $dao->retrieveAll();


$name = $_GET["name"];
$records = $dao->retrieve($name);
echo "<h1>$name</h1>";

echo "<table border='1'>";
$i = 1;
foreach ($records as $r) {
    echo "<tr>
        <td>$i</td>
        <td>{$r->description}</td>
        <td>{$r->points}</td>
        <td></td>
    </tr>";
    $i +=1;
}

echo "</table>";

?>