<?php
// Connect to MySQL
include 'database.php';

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get form data
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$id_number = $_POST['id_number'];
$phonenumber = $_POST['phonenumber'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert user data into database
$sql = "INSERT INTO users (fname, mname, lname, id_number, phonenumber, password) VALUES ('$fname', '$mname', '$lname', '$id_number', '$phonenumber', '$password')";

if ($mysqli->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
