<?php
require "../connection.php";
session_start();

if (!isset($_SESSION["u"])) {
    $em = $_POST["em"];
    $pw = $_POST["pw"];

    $user_data = Database::s("SELECT * FROM `user` WHERE `email` = '" . $em . "' AND `password` = '" . $pw . "';");
    $no_u = $user_data->num_rows;

    if ($no_u == 1) {
        $user = $user_data->fetch_assoc();
        $_SESSION["u"] = $user;
        echo "Success";
    } else {
        echo "Invalid username or password";
    }
} else {
    echo "Already logged in";
}
