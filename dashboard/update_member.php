<?php
include 'conn.php'; // Include your database connection file

// Initialize the response message
$responseMessage = 'An unknown error occurred.';

// Enable error reporting for debugging (only during development)
ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    // Check that the request method is POST
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Invalid request method.");
    }

    // Validate and sanitize input
    $id = isset($_POST['memberId']) ? intval($_POST['memberId']) : 0;
    if ($id <= 0) {
        throw new Exception("Invalid member ID.");
    }

    $name = htmlspecialchars($_POST['name'] ?? '');
    $address = htmlspecialchars($_POST['address'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $is_approved = isset($_POST['is_approved']) ? 1 : 0;

    // Handle image upload
    $imagePath = null;
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = 'uploads/';
        $imagePath = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $imagePath;

        // Move the uploaded file
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            throw new Exception("Failed to upload image.");
        }
    } else {
        // Get existing image path if no new image uploaded
        $query = "SELECT image FROM members WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $member = $result->fetch_assoc();

        if ($member) {
            $imagePath = $member['image'];
        } else {
            throw new Exception("Member not found.");
        }
    }

    // Update query
    $sql = "UPDATE members SET name = ?, address = ?, email = ?, phone = ?, image = ?, is_approved = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssii", $name, $address, $email, $phone, $imagePath, $is_approved, $id);

    if ($stmt->execute()) {
        $responseMessage = "Member updated successfully!";
    } else {
        throw new Exception("Database error: " . $stmt->error);
    }

    $stmt->close();
} catch (Exception $e) {
    $responseMessage = $e->getMessage();
} finally {
    // Close the database connection
    $conn->close();

    // Output the response message
    echo $responseMessage; // Return a simple message
}
?>
