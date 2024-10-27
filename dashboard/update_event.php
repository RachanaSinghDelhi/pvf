<?php
include 'conn.php'; // Include database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $event_id = intval($_POST['eventId']); // Make sure ID is an integer
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));

    // Ensure all fields are filled in
    if (empty($title) || empty($description) || $event_id <= 0) {
        die('All fields are required and must be valid.');
    }

    // Prepare the SQL statement to update the event data in the database
    $sql = "UPDATE events SET title = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the SQL query
        $stmt->bind_param('ssi', $title, $description, $event_id);

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo 'Event updated successfully!';
        } else {
            echo 'Error updating event: ' . $stmt->error;
        }
        $stmt->close();
    } else {
        echo 'Database query error: ' . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo 'Invalid request method.';
}
?>
