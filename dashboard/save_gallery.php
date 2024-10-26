<?php
include 'conn.php'; // Includes the database connection


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate inputs
    $title = htmlspecialchars(trim($_POST['title']));
    $description = htmlspecialchars(trim($_POST['description']));

    // Initialize image path
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

    // Prepare the SQL statement to insert gallery data into the database
    $sql = "INSERT INTO galleries (title, description, image_path) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to the SQL query
        $stmt->bind_param('sss', $title, $description, $imagePath);
        
        // Execute the query and check for success
        if ($stmt->execute()) {
            echo 'Gallery added successfully!';
        } else {
            echo 'Error adding gallery: ' . $stmt->error;
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
