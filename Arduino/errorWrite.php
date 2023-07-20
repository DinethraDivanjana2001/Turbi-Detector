<?php

session_start();
require "../connection.php";

$did = $_POST["did"];
$err = $_POST["err"];

$device = Database::s("SELECT * FROM `device` WHERE `did` = '" . $did . "';");
$deviceData = $device->fetch_assoc();

if ($err == 1) {
    Database::iud("INSERT INTO `error_records`(`edat`,`etime`,`edes`,`device_id`,`error_type_et_id`) VALUES('" . date("Y-m-d") . "','" . date("H:i:s") . "','Alert','" . $deviceData["id"] . "','" . $err . "');");
    Database::iud("UPDATE `device` SET `sol_1` = '0',`sol_2`='1' WHERE `did` = '" . $did . "';");
} else if ($err == 2) {
    Database::iud("INSERT INTO `error_records`(`edat`,`etime`,`edes`,`device_id`,`error_type_et_id`) VALUES('" . date("Y-m-d") . "','" . date("H:i:s") . "','Warning','" . $deviceData["id"] . "','" . $err . "');");
    Database::iud("UPDATE `device` SET `sol_1` = '0',`sol_2`='1' WHERE `did` = '" . $did . "';");
} else if ($err == 3) {
    Database::iud("INSERT INTO `error_records`(`edat`,`etime`,`edes`,`device_id`,`error_type_et_id`) VALUES('" . date("Y-m-d") . "','" . date("H:i:s") . "','Danger','" . $deviceData["id"] . "','" . $err . "');");
    Database::iud("UPDATE `device` SET `sol_1` = '0',`sol_2`='0' WHERE `did` = '" . $did . "';");
}


?>