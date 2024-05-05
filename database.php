<?php
// Database configuration
$servername = "localhost"; // or your server's IP address
$username = "root";
$password = "";
$database = "karf_registration"; // your database name

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
