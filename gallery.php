<?php
// Include the database connection
include 'conn.php';

// Pagination setup (optional if you have many images)
$limit = 20; // Number of images per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch gallery images from the 'galleries' table
$query = "SELECT id, title, SUBSTRING(description, 1, 100) AS short_description, image_path FROM galleries ORDER BY id DESC";
$result = $conn->query($query);

// Check if the query was successful
if (!$result) {
    die("Error executing query: " . $conn->error);
}

// Get total number of gallery images for pagination (optional)
$total_query = "SELECT COUNT(*) as total FROM galleries";
$total_result = $conn->query($total_query);
$total_row = $total_result->fetch_assoc();
$total_images = $total_row['total'];
$total_pages = ceil($total_images / $limit);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/logo2.png" type="image/png">
        <title>PasManda Vikas foundation</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>




<body>
    <!-- Navbar Start -->
    <?php include('includes/navbar.php'); ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4">Gallery</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">Gallery</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Section Start -->
    <div class="container mt-5">
        <h1 class="text-center">Gallery</h1>
        <div class="row">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($image = $result->fetch_assoc()): ?>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <!-- Updated lightbox setup -->
                            <a href="dashboard/uploads/gallery/<?= htmlspecialchars($image['image_path']) ?>" data-lightbox="gallery" data-title="<?= htmlspecialchars($image['title']) ?>">
                                <img src="dashboard/uploads/gallery/<?= htmlspecialchars($image['image_path']) ?>" class="card-img-top img-fluid" alt="<?= htmlspecialchars($image['title']) ?>" style="height: 200px; object-fit: cover;">
                            </a>
                            <div class="card-body">
                                <p class="card-text text-center">,<b><?= htmlspecialchars($image['title']) ?></b></p>
                                <p class="card-text text-center"><?= htmlspecialchars($image['short_description']) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>No images found in the gallery.</p>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination (optional) -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
    <!-- Gallery Section End -->

    <!-- Footer Start -->
    <?php include('includes/footer.php'); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- Lightbox2 JavaScript and Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
