<?php
$servername = "localhost";
$username = "root";  // Update your username
$password = "";      // Update your password
$dbname = "pvfound"; // Update your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
