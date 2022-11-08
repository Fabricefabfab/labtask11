<?php

require "config/constants.php";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "b19b15268564db";
$password = "884308b1";
$db = "heroku_ad357842d03c6ca";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
