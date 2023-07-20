
<?php

require "../connection.php";

$did = $_POST["did"];


$dev = Database::s("SELECT * FROM `device` WHERE `did` = '" . $did . "'");
if ($dev->num_rows == 1) {
    $devData = $dev->fetch_assoc();
    echo json_encode($devData);
} else {
    echo "Device Not registered";
}



?>
