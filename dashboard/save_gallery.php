<?php
// Include the database connection
include 'conn.php';

// Start the session to verify the logged-in user
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login_register/login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $response = [];
    $uploadDir = __DIR__ . '/uploads/gallery/'; // Corrected directory path
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (isset($_FILES['images'])) {
        $fileCount = count($_FILES['images']['name']);
        $errors = [];
        $successCount = 0;

        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES['images']['name'][$i];
            $fileTmpPath = $_FILES['images']['tmp_name'][$i];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $newFileName = time() . "_$i." . $fileExtension; // Unique filename
            $destPath = $uploadDir . $newFileName;

            // Validate file type
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($fileExtension, $allowedExtensions)) {
                $errors[] = "$fileName: Invalid file type.";
                continue;
            }

            // Move file and insert record into database
            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $sql = "INSERT INTO galleries (title, description, image_path, created_at) 
                        VALUES ('$title', '$description', '$newFileName', NOW())";

                if (mysqli_query($conn, $sql)) {
                    $successCount++;
                } else {
                    $errors[] = "$fileName: Database error.";
                }
            } else {
                $errors[] = "$fileName: Failed to upload.";
            }
        }

        $response['success'] = "$successCount image(s) uploaded successfully.";
        if (!empty($errors)) {
            $response['error'] = implode(' ', $errors);
        }
    } else {
        $response['error'] = 'No images uploaded.';
    }

    echo json_encode($response);
}
?>
