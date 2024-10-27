<?php
// 404.php
header("HTTP/1.0 404 Not Found"); // Set the HTTP response status code to 404
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file if needed -->
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>404 - Page Not Found</h1>
        <p>Sorry, the page you are looking for does not exist.</p>
        <a href="index.php">Return to Home</a> <!-- Change this to your homepage -->
    </div>
</body>
</html>
