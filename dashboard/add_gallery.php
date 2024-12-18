<?php


// Include the database connection
include 'conn.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login_register/login.php");
    exit();
}

 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" href="../img/images/logo2.png" type="image/png">
        <title>Pasmanda Vikas Foundation - Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
       
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
                    <h2 class="text-center mb-4">Add New Gallery</h2>
                    <div id="response" class="alert alert-success mt-3 d-none"></div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                        <form id="addGalleryForm" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="3" maxlength="200" required></textarea>
                <small id="descriptionHelp" class="form-text text-muted">Maximum 200 characters allowed.</small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="images" class="form-label">Images:</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple required>
                <!-- Image previews -->
                <div class="mt-3" id="imagePreviews"></div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Add Gallery</button>
    <a href="gallery.php" class="btn btn-primary mt-3">Gallery List</a>
</form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include 'partials/footer.php'; ?>
        </div>
    </div>


    <script>
        // JavaScript for Image Preview
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('imagePreview');

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';  // Show the image
                };

                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';  // Hide the image preview if no image is selected
            }
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

   
