<?php
require "../connection.php";
session_start();

if (!isset($_SESSION["u"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $em = $_POST["em"];
    $pw = $_POST["pw"];
    $repw = $_POST["repw"];

    if (empty($fname)) {
        echo "Enter First name";
    } else if (empty($lname)) {
        echo "Enter last name";
    } else if (empty($em)) {
        echo "Enter email";
    } else if (empty($pw)) {
        echo "Enter password";
    } else if (empty($repw)) {
        echo "Retype password";
    } else if ((string)$pw != (string)$repw) {
        echo "Password doesnt match";
    } else {
        $user_check = Database::s("SELECT * FROM `user` WHERE `email` = '" . $em . "';");
        $n = $user_check->num_rows;
        if ($n != 1) {
            Database::iud("INSERT INTO `user`(`fnam`,`lname`,`email`,`password`) VALUES('" . $fname . "','" . $lname . "','" . $em . "','" . $pw . "');");
            echo "Done";
        } else {
            echo "Email already exists";
        }
    }
} else {
    echo "You already logged in";
}
