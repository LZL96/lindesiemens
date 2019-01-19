<?php




?>


<?php
require_once 'include/common.php';
require_once 'include/protect.php';
$dao = new RecordDAO();
$records= $dao->retrieveAll();


$name = $_GET["name"];
$records = $dao->retrieve($name);
echo "<h1>$name</h1>";

if (isset($_GET["desc"]) && isset($_GET["points"])) {

    $record = new Record($name, $_GET["desc"], $_GET["points"]);
    // print_r($record);
    
    echo $dao->add($record);

}




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
<form>
    <table>
        <tr><td>description: <input type="text" name="desc"></td></tr>
        <tr><td>points awarded/deducted: <input type="text" name="points" width="20px"></td></tr>
        <tr><td><input type="submit"></td></tr>
    </table>
    <?php echo "<input type='hidden' value='$name' name='name'>";?>
</form>

