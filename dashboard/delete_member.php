<?php
// Include your database connection file
include 'conn.php'; // Adjust the path if needed

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $memberId = $_POST['id'];
        
        // Prepare and execute the deletion query
        $stmt = $conn->prepare("DELETE FROM members WHERE id = ?");
        $stmt->bind_param("i", $memberId);
        
        if ($stmt->execute()) {
            $response = array('success' => true, 'message' => 'Member deleted successfully.');
        } else {
            $response = array('success' => false, 'message' => 'Failed to delete member.');
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
