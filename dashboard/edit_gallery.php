<?php


// Include the database connection
// Include the database connection
include 'conn.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}


 
// Initialize variables
$galleryItem = null;

// Check if an ID is provided to fetch the existing gallery item
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement to fetch the gallery item by ID
    $stmt = $conn->prepare("SELECT * FROM galleries WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $galleryItem = $result->fetch_assoc();
    }

    // Close the statement
    $stmt->close();
}

// Handle form submission for updating gallery item
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['galleryId'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_path = '';

    // Handle image upload if a new image is provided
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $target_dir = "uploads/gallery/";
        $image_path = basename($_FILES['image']['name']);
        $target_file = $target_dir . $image_path;

        // Move uploaded file to target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // Image uploaded successfully
        } else {
            // Handle error
            echo "Error uploading image.";
            exit;
        }
    } else {
        // If no new image is uploaded, retain the existing image path
        $stmt = $conn->prepare("SELECT image_path FROM galleries WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $image_path = $row['image_path'];
    }

    // Prepare SQL statement to update the gallery item
    $stmt = $conn->prepare("UPDATE galleries SET title = ?, description = ?, image_path = ? WHERE id = ?");
    $stmt->bind_param("sssi", $title, $description, $image_path, $id);
    if ($stmt->execute()) {
        echo "<script>alert('Gallery item updated successfully.'); window.location.href = 'gallery.php';</script>";
    } else {
        echo "<script>alert('Error updating gallery item.');</script>";
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    </head>
    <body class="sb-nav-fixed">
     <?php include('partials/header.php');?>


    <div id="layoutSidenav">
        <?php include 'partials/sidebar.php'; ?>

        <div id="layoutSidenav_content">
            <main>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Gallery Item</h2>

        <form id="editGalleryForm" enctype="multipart/form-data">
            <input type="hidden" id="galleryId" name="galleryId" value="<?php echo isset($galleryItem['id']) ? $galleryItem['id'] : ''; ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo isset($galleryItem['title']) ? htmlspecialchars($galleryItem['title']) : ''; ?>" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" required><?php echo isset($galleryItem['description']) ? htmlspecialchars($galleryItem['description']) : ''; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image (Optional):</label>
                <input type="file" class="form-control" id="image" name="image">
                <?php if (isset($galleryItem['image_path'])): ?>
                    <div class="mt-3">
                        <img id="imagePreview" src="uploads/gallery/<?php echo htmlspecialchars($galleryItem['image_path']); ?>" alt="Image Preview" style="max-width: 200px; height: auto;">
                    </div>
                <?php else: ?>
                    <div class="mt-3">
                        <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 200px; height: auto; display: none;">
                    </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Gallery Item</button>
            <a href="gallery.php" class="btn btn-secondary mt-3">Back to Gallery</a>
        </form>
    </div>
    </main>
    <?php include 'partials/footer.php'; ?>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // JavaScript for Image Preview
            $('#image').on('change', function(event) {
                const file = event.target.files[0];
                const preview = $('#imagePreview');

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.attr('src', e.target.result);
                        preview.show(); // Show the image
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.attr('src', ''); // Reset the image preview
                    preview.hide(); // Hide the image if no file is selected
                }
            });

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
   
    