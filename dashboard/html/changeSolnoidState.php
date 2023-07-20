<?php

session_start();

require "../../connection.php";

$did = $_GET["did"];
$var = $_GET["var"];
$sol = $_GET["sol"];

if ($sol == 1) {
    Database::iud("UPDATE `device` SET `sol_1` = '" . $var . "' WHERE `id` = '" . $did . "';");
} else if ($sol == 2) {
    Database::iud("UPDATE `device` SET `sol_2` = '" . $var . "' WHERE `id` = '" . $did . "';");
}

echo "Done";
?>