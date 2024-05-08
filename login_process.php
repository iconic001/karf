<?php
session_start();

// Connect to MySQL
include 'database.php';

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get form data
$id_number = $_POST['id_number'];
$password = $_POST['password'];

// Fetch user data from database
$sql = "SELECT * FROM users WHERE id_number='$id_number'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        $_SESSION['id_number'] = $id_number;
        header("Location:index.php");
    } else {
        echo "Invalid password!";
    }
} else {
    echo "User not found!";
}

$mysqli->close();
?>
