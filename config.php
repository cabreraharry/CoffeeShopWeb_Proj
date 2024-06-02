<?php
// config.php

$servername = "localhost";
$username = "root";
$password = "9090";
$dbname = "sys";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
