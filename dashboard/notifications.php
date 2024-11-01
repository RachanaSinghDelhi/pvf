<?php
// notifications.php
require 'conn.php'; // Include your database connection file

// Fetch notifications from the database
$query = "SELECT * FROM notifications ORDER BY created_at DESC LIMIT 10"; // Adjust the query as necessary
$result = $conn->query($query);
$notifications = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $notifications[] = $row; // Store notifications in an array
    }
} else {
    $notifications = []; // No notifications found
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Notifications</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>All Notifications</h2>
        <ul class="list-group">
            <?php if (empty($notifications)): ?>
                <li class="list-group-item">No notifications available.</li>
            <?php else: ?>
                <?php foreach ($notifications as $notification): ?>
                    <li class="list-group-item"><?php echo htmlspecialchars($notification['message']); ?></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <a href="index.php" class="btn btn-primary mt-3">Back to Dashboard</a>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
