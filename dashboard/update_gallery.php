<?php
include 'conn.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $id = (int)$_POST['galleryId'];
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));
    $imagePath = null;

    // Handle file upload if an image is provided
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageTmpPath = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name'];
        
        // Get the base name of the image
        $imageBaseName = basename($imageName);
        
        // Define the upload path
        $uploadPath = 'uploads/gallery/' . $imageBaseName;

        // Move the uploaded file to the designated folder
        if (move_uploaded_file($imageTmpPath, $uploadPath)) {
            // Store only the base name in the database
            $imagePath = $imageBaseName;
        } else {
            echo 'Error uploading image';
            exit;
        }
    }

    // Prepare the SQL statement to update gallery data in the database
    if ($imagePath) {
        // Update with new image
        $sql = "UPDATE galleries SET title = ?, description = ?, image_path = ? WHERE id = ?";
    } else {
        // Update without new image
        $sql = "UPDATE galleries SET title = ?, description = ? WHERE id = ?";
    }

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the SQL query
        if ($imagePath) {
            $stmt->bind_param('sssi', $title, $description, $imagePath, $id);
        } else {
            $stmt->bind_param('ssi', $title, $description, $id);
        }

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo 'Gallery updated successfully!';
        } else {
            echo 'Error updating gallery: ' . $stmt->error;
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
