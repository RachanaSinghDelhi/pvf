<?php




// Include the database connection
include 'conn.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}


// Fetch members from the database
$query = "SELECT * FROM members ORDER BY id DESC";
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="../img/images/logo2.png" type="image/png">
        <title>Pasmanda Vikas Foundation - Dashboard</title>
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
                    <h1 class="mt-4 text-center">Members List</h1>

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
                                <i class="fas fa-users me-1"></i>
                                Members List
                            </div>
                            <a href="add_members.php" class="btn btn-primary">Add New Member</a>
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Profile Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Profile Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php if ($result->num_rows > 0): ?>
                                        <?php $i = 1; while ($member = $result->fetch_assoc()): ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= htmlspecialchars($member['name']) ?></td>
                                                <td><?= htmlspecialchars($member['address']) ?></td>
                                                <td><?= htmlspecialchars($member['email']) ?></td>
                                                <td><?= htmlspecialchars($member['phone']) ?></td>
                                                <td>
                                                    <?php if ($member['image']): ?>
                                                        <img src="uploads/<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" style="width: 50px; height: auto;">
                                                    <?php else: ?>
                                                        <img src="../img/default-avatar.png" alt="Default Avatar" style="width: 50px; height: auto; border-radius: 50%;">
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <!-- Edit Button -->
                                                    <a href="edit_member.php?id=<?= $member['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                      <form action="approve_members.php" method="POST" style="display: inline;">
                            <input type="hidden" name="id" value="<?= $member['id']; ?>">
                            <input type="hidden" name="current_status" value="<?= $member['is_approved'] ? 1 : 0; ?>">
                            <button type="submit" class="btn btn-sm <?= $member['is_approved'] ? 'btn-danger' : 'btn-success'; ?>">
                                <?= $member['is_approved'] ? 'Disapprove' : 'Approve'; ?>
                            </button>
                        </form>

                                                    <form class="delete-member-form" method="POST" style="display: inline;">
                <input type="hidden" name="id" value="<?= $member['id'] ?>">
                <button type="button" class="btn btn-sm btn-danger delete-btn" data-id="<?= $member['id'] ?>">Delete</button>
            </form>


                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="7" class="text-center">No members found.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
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