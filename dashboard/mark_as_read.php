<?php
// mark_as_read.php
include 'conn.php'; // Include database connection

// Update all notifications to mark them as read
$query = "UPDATE notifications SET is_read = 1 WHERE is_read = 0";
$result = mysqli_query($conn, $query);

// Check if the update was successful
if ($result) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Failed to update notifications.']);
}
?>
