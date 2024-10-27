<?php


// Include the database connection
include 'conn.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}


// Check if the member ID is set in the URL
if (isset($_GET['id'])) {
    $memberId = intval($_GET['id']); // Sanitize the input to prevent SQL injection

    // Prepare and execute a query to retrieve the member's data
    $query = "SELECT * FROM members WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $memberId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the member exists
    if ($result->num_rows > 0) {
        $member = $result->fetch_assoc(); // Fetch the member's data
    } else {
        die("Member not found.");
    }

    $stmt->close();
} else {
    die("Member ID is not specified. URL: " . $_SERVER['REQUEST_URI']);
}

$conn->close(); // Close the database connection
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
        <h2 class="text-center mb-4">Edit Member</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
            <form id="editMemberForm" enctype="multipart/form-data">
            <input id="memberId" type="hidden" name="memberId" value="<?php echo $member['id']; ?>"> <!-- Assuming you have the member ID from backend -->
                    <div class="row">
                        <!-- First Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $member['name']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $member['email']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $member['phone']; ?>" required>
                            </div>
                        </div>
                        <!-- Second Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" value="<?php echo $member['address']; ?>" required>
                            </div>
                            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
                <?php if (isset($member['image'])): ?>
                    <div class="mt-3">
                        <img id="imagePreview" src="uploads/<?php echo htmlspecialchars($member['image']); ?>" alt="Image Preview" style="max-width: 200px; height: auto;">
                    </div>
                <?php else: ?>
                    <div class="mt-3">
                        <img id="imagePreview" src="default-avatar.png" alt="Image Preview" style="max-width: 200px; height: auto; display: none;">
                    </div>
                <?php endif; ?>
            </div>
                            <div class="mb-3">
                                <label for="is_approved" class="form-check-label">Approved:</label>
                                <input type="checkbox" class="form-check-input" id="is_approved" name="is_approved" <?php echo $member['is_approved'] ? 'checked' : ''; ?>>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update Member</button>
                    <a href="index.php" class="btn btn-primary mt-3">Members List</a>
                </form>
                <!-- Green alert box for response -->
                <div id="response" class="alert alert-success mt-3 d-none"></div>
            </div>
        </div>
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

    