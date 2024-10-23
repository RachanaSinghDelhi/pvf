<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="assets/img/images/logo2.png" type="image/png">
    <title><?php echo isset($title) ? $title : 'Dashboard'; ?> - Admin</title>

    <!-- Link to CSS files stored in public/dashboard/ -->
    <link href="dashboard/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

    <!-- FontAwesome -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
    <style>
    .datatable-selector {
        width: 100px;
    }
    </style>
</head>
<body class="sb-nav-fixed">

    <!-- Include Header Partial -->
    <?php include 'partials/header.php'; ?>

    <div id="layoutSidenav">
        
        <!-- Include Sidebar Partial -->
        <?php include 'partials/sidebar.php'; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <!-- Main Page Content -->
                    <?php
                    // Include the content of the specific page here. This is equivalent to @yield('content').
                    if (isset($content)) {
                        include $content;
                    }
                    ?>
                </div>
            </main>

            <!-- Include Footer Partial -->
            <?php include 'partials/footer.php'; ?>
        </div>
    </div>

    <!-- Include Scripts stored in public/dashboard/ -->
    <script src="dashboard/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="dashboard/js/demo/chart-area-demo.js"></script>
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="dashboard/js/datatables-simple-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="dashboard/assets/demo/chart-bar-demo.js"></script>
    <script src="dashboard/assets/demo/chart-pie-demo.js"></script>

</body>
</html>
