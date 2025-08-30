<?php
$servername = "localhost";
$username = "root"; // XAMPP default username
$password = "";     // XAMPP default password is empty

// Connect to MySQL server
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 1: Create Database if not exists
$sql = "CREATE DATABASE IF NOT EXISTS todolist";
if ($conn->query($sql) === TRUE) {
    echo "Database 'todolist' created successfully.<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Step 2: Select the database
$conn->select_db("todolist");

// Step 3: Create Table if not exists
$sql = "CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'tasks' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
