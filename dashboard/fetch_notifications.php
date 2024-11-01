<?php
include 'conn.php';

// Modified query to fetch only relevant fields
$query = "SELECT id, message, is_read, created_at FROM notifications WHERE is_read = 0";

$result = mysqli_query($conn, $query);


$notifications = [];

while ($row = mysqli_fetch_array($result)) {
    $notifications[] = $row;

   
}


echo json_encode($notifications);

?>
