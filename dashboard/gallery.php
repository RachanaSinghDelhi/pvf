<?php


// Include the database connection
include 'conn.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}

 


// Fetch members from the database
$query = "SELECT id, title, SUBSTRING(description, 1, 100) AS short_description, image_path FROM galleries ORDER BY id DESC";
$result = $conn->query($query);

// Check if the query was successful
if (!$result) {
    die("Error executing query: " . $conn->error);
}

// Handle error messages
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
unset($_SESSION['errors']);

// Handle success messages
$success = isset($_SESSION['success']) ? $_SESSION['success'] : '';
unset($_SESSION['success']);
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
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">Gallery List</h1>

                    <!-- Display Success Message -->
                    <?php if ($success): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $success ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <!-- Display Error Message -->
                    <?php if ($errors): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li><?= $error ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <img src="../img/images/logo2.png" width="100">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div>
                                <i class="fas fa-images me-1"></i>
                                Gallery List
                            </div>
                            <a href="add_gallery.php" class="btn btn-primary">Add New Gallery Item</a>
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ($result->num_rows > 0): ?>
                                        <?php $i = 1; while ($gallery = $result->fetch_assoc()): ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= htmlspecialchars($gallery['title']) ?></td>
                                                <td><?=  htmlspecialchars($gallery['short_description']) ?></td>
                                                <td>
                                                    <img src="uploads/gallery/<?= htmlspecialchars($gallery['image_path']) ?>" alt="<?= htmlspecialchars($gallery['title']) ?>" style="width: 100px; height: auto;">

                                                </td>
                                                <td>
                                                    <!-- Edit Button -->
                                                    <a href="edit_gallery.php?id=<?= $gallery['id'] ?>" class="btn btn-sm btn-warning">Edit</a>

                                                    <!-- Delete Button -->
                                                   
                                                    <form class="delete-gallery-form" method="POST" style="display: inline;">
                                                        <input type="hidden" name="id" value="<?= $member['id'] ?>">
                                                        <button type="button" class="btn btn-sm btn-danger delete-gallery-btn" data-id="<?= $gallery['id'] ?>">Delete</button>
                                                   </form>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="5" class="text-center">No gallery items found.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php include 'partials/footer.php'; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
