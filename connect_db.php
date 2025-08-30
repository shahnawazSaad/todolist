<?php
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = "";     // default XAMPP has no password
$dbname = "todolist";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
