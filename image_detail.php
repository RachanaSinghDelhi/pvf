<?php
// Include the database connection
include 'conn.php';

// Check if the image ID is set
if (isset($_GET['id'])) {
    $image_id = (int)$_GET['id']; // Sanitize the input

    // Fetch the gallery image details from the 'galleries' table
    $query = "SELECT * FROM galleries WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $image_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query was successful and if an image was found
    if ($result->num_rows > 0) {
        $image = $result->fetch_assoc();
    } else {
        // Redirect or show an error if the image is not found
        die("Image not found.");
    }
} else {
    // Redirect or show an error if no image ID is provided
    die("No image ID specified.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($image['title']) ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1><?= htmlspecialchars($image['title']) ?></h1>
        <img src="dashboard/uploads/gallery/<?= htmlspecialchars($image['image_path']) ?>" class="img-fluid" alt="<?= htmlspecialchars($image['title']) ?>">
        <p class="mt-3"><?= htmlspecialchars($image['description']) ?></p> <!-- Display full description -->
        <a href="gallery.php" class="btn btn-primary">Back to Gallery</a>
    </div>
</body>
</html>
