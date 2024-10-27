<?php
include 'conn.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));

    // Prepare the SQL statement to insert data into the events table
    $sql = "INSERT INTO events (title, description) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the SQL query
        $stmt->bind_param('ss', $title, $description);

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo 'Event added successfully!';
        } else {
            echo 'Error adding event: ' . $stmt->error;
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
