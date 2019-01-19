<?php

if ($_SESSION['user'] == 'admin'){
	header("Location: admin-view.php");
}    
else {
    header("Location: operator-view.php");
}
?>