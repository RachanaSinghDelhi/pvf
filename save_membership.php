<?php
// Include database connection
include('conn.php');

// Initialize response variable
$response = '';

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

    if ($count > 0) {
        $response = 'You have already applied for membership.';
        echo $response;
        exit();
    }

    // Handle image upload
    $imagePath = 'default-avatar.png'; // Default image
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'gif', 'png', 'jpeg'];

        if (in_array($fileExtension, $allowedExtensions)) {
            $uploadDir = 'dashboard/uploads/';
            $destPath = $uploadDir . md5(time() . $fileName) . '.' . $fileExtension;
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $imagePath = $destPath;
            } else {
                $response = 'Error moving the uploaded file.';
                echo $response;
                exit();
            }
        } else {
            $response = 'Allowed file types: ' . implode(", ", $allowedExtensions);
            echo $response;
            exit();
        }
    }

    // Insert member into database
    $sql = "INSERT INTO members (name, email, phone, address, image, is_approved) VALUES (?, ?, ?, ?, ?, 0)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $address, $imagePath);

    if ($stmt->execute()) {
        $response = 'Successfully applied for membership. Approval is pending...';

        // Insert notification for new registration
        $message = "New member registered: $name";
        $notifSql = "INSERT INTO notifications (message) VALUES (?)";
        $notifStmt = $conn->prepare($notifSql);
        $notifStmt->bind_param("s", $message);
        $notifStmt->execute();
        $notifStmt->close();
    } else {
        $response = 'Error adding member: ' . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

echo $response;
?>
