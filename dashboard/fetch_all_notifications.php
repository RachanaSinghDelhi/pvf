<?php
// Include database connection
require 'conn.php'; // Make sure this file contains your database connection logic

$query = "SELECT * FROM notifications ORDER BY created_at DESC"; // Adjust to your actual table and columns
$result = mysqli_query($conn, $query);

$notifications = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $notifications[] = $row; // Store each notification
    }
} else {
    error_log("Query Error: " . mysqli_error($conn)); // Log any SQL errors for debugging
}

header('Content-Type: application/json'); // Set the content type to JSON
echo json_encode($notifications); // Send the JSON response
?>
