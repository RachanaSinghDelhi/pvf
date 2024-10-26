<?php
// Include your database connection file
include 'conn.php'; // Adjust the path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $galleryId = $_POST['id'];

        // Prepare and execute a query to get the image path
        $stmt = $conn->prepare("SELECT image_path FROM galleries WHERE id = ?");
        $stmt->bind_param("i", $galleryId);
        $stmt->execute();
        $stmt->bind_result($imagePath);
        $stmt->fetch();
        $stmt->close();

        // Check if the image path is valid
        $fullImagePath = 'uploads/gallery/' . $imagePath; // Adjust the path as necessary

        // Delete the gallery entry
        $stmt = $conn->prepare("DELETE FROM galleries WHERE id = ?");
        $stmt->bind_param("i", $galleryId);

        if ($stmt->execute()) {
            // If deletion is successful, delete the image file
            if (!empty($fullImagePath) && file_exists($fullImagePath)) {
                if (unlink($fullImagePath)) {
                    $response = array('success' => true, 'message' => 'Gallery item and image deleted successfully.');
                } else {
                    $response = array('success' => false, 'message' => 'Gallery item deleted, but failed to delete the image file. Please check permissions.');
                }
            } else {
                $response = array('success' => true, 'message' => 'Gallery item deleted, but no image found to delete.');
            }
        } else {
            $response = array('success' => false, 'message' => 'Failed to delete gallery item from the database.');
        }

        $stmt->close();
    } else {
        $response = array('success' => false, 'message' => 'Invalid request.');
    }

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
}

// Close the database connection
$conn->close();
?>
