<?php
// Include database connection
include('conn.php');

// Initialize response variable
$response = ''; // Initialize as a string

// Check if form data is received
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Check if the user has already applied for membership
    $checkSql = "SELECT COUNT(*) FROM members WHERE email = ? OR phone = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("ss", $email, $phone);
    $checkStmt->execute();
    $checkStmt->bind_result($count);
    $checkStmt->fetch();
    $checkStmt->close();

    // If a record already exists
    if ($count > 0) {
        $response = 'You have already applied for membership.';
        echo $response;
        exit();
    }

    // Handle image upload
    $imagePath = 'default-avatar.png'; // Set default image path
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        // Image upload process
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Specify allowed file extensions
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Set the destination path for the uploaded file
            $uploadFileDir = 'dashboard/uploads/';
            $dest_path = $uploadFileDir . md5(time() . $fileName) . '.' . $fileExtension;

            // Move the uploaded file
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $imagePath = $fileName; // Save only the base name of the file
            } else {
                $response = 'There was an error moving the uploaded file.';
                echo $response;
                exit();
            }
        } else {
            $response = 'Upload failed. Allowed file types: ' . implode(", ", $allowedfileExtensions);
            echo $response;
            exit();
        }
    }

    // Prepare SQL to insert the member
    $sql = "INSERT INTO members (name, email, phone, address, image, is_approved) VALUES (?, ?, ?, ?, ?, 0)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $address, $imagePath);

    if ($stmt->execute()) {
        $response = 'Successfully applied for membership. Approval is pending...';
    } else {
        $response = 'Error adding member: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

// Return response
echo $response;
?>
