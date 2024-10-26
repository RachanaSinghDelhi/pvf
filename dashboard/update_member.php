<?php
include 'conn.php'; // Include your database connection file

header('Content-Type: application/json'); // Set the content type to JSON

$response = []; // Initialize a response array

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve input values
    $id = intval($_POST['memberId']);
    $name = htmlspecialchars($_POST['name']);
    $address = htmlspecialchars($_POST['address']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $is_approved = isset($_POST['is_approved']) ? 1 : 0; // Checkbox handling

    // Handle image upload
    $imagePath = null; // Initialize variable for image path
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $targetDir = 'uploads/'; // Directory to save uploaded images
        $imagePath = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $imagePath;

        // Move the uploaded file to the target directory
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            $response['success'] = false;
            $response['message'] = "Failed to upload image.";
            echo json_encode($response);
            exit();
        }
    } else {
        // If no file is selected, retain the existing image path
        $query = "SELECT image FROM members WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $member = $result->fetch_assoc();
        $imagePath = $member['image']; // Use existing image
    }

    // Prepare and execute update query
    $sql = "UPDATE members SET name = ?, address = ?, email = ?, phone = ?, image = ?, is_approved = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssii", $name, $address, $email, $phone, $imagePath, $is_approved, $id);

    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = "Member updated successfully!";
    } else {
        $response['success'] = false;
        $response['message'] = "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    $response['success'] = false;
    $response['message'] = "Invalid request method.";
}

$conn->close(); // Close the database connection
echo json_encode($response); // Return JSON response
?>
