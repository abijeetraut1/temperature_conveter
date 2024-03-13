<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "temperature_calc";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

echo "<h1 class='connected-heading'>" . "Connected successfully" . "</h1>";

?>;