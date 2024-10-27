<?php
include 'conn.php'; // Include your database connection

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $current_status = $_POST['current_status'];

    // Toggle the approval status
    $new_status = ($current_status == 1) ? 0 : 1; // Set to 0 if currently approved, and 1 if currently disapproved

    // Update the member's status in the database
    $sql = "UPDATE members SET is_approved = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $new_status, $id);

    if ($stmt->execute()) {
        // Redirect back to manage_members.php with a status message
        header("Location:index.php?status=" . ($new_status ? 'approved' : 'disapproved'));
        exit();
    } else {
        // Handle error
        echo "Error: " . $stmt->error;
    }
}
?>
