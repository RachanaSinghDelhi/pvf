<?php
include 'conn.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $is_approved = isset($_POST['is_approved']) ? 1 : 0; // Checkbox handling

    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $imagePath = 'uploads/' . basename($_FILES['image']['name']); // Path where images will be stored
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    } else {
        $imagePath = 'default-avatar.png'; // Default avatar image path
    }

    // Prepare and execute insert query
    $sql = "INSERT INTO members (name, address, email, phone, image, is_approved) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $name, $address, $email, $phone, $imagePath, $is_approved);
    if ($stmt->execute()) {
        // Success message
        echo "New member added successfully!";
    } else {
        // Error message
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
