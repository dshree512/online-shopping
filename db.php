<?php

$servername = "127.0.0.1:3305";
$username = "root";
$password = "";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed in db file: " . mysqli_connect_error());
}


?>
