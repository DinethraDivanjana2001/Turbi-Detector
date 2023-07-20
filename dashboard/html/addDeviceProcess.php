<?php

session_start();

require "../../connection.php";

$uid = $_POST["uid"];
$did = $_POST["did"];
$dname = $_POST["dname"];

if (empty($did)) {
    echo "Enter device id";
} else if (empty($dname)) {
    echo "Enter device name";
} else {
    $checkDevice = Database::s("SELECT * FROM `device` WHERE `did` = '" . $did . "';");
    if ($checkDevice->num_rows != 1) {
        Database::iud("INSERT INTO `device`(`did`,`dname`,`device_status_s_id`,`sol_1`,`sol_2`) VALUES('" . $did . "','" . $dname . "','1','0','0');");

        $deviceData = Database::s("SELECT * FROM `device` WHERE `did` = '" . $did . "';");
        $device = $deviceData->fetch_assoc();

        Database::iud("INSERT INTO `user_has_device`(`user_id`,`device_id`) VALUES('" . $uid . "','" . $device['id'] . "');");

        echo "Done";
    } else {
        echo "Device already registerd";
    }
}
?>