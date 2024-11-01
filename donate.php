<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
  
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="img/images/logo2.png" type="image/png">
    <title>Pasmanda Vikas Foundation - Donate</title>
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php include('includes/navbar.php'); ?>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Donate Now</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">Donate Now</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Donation Start -->
    <div class="container-fluid donation py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <h4 class="text-primary">Support Our Cause</h4>
                    <h1 class="display-5 mb-4">Donate for the upliftment og Pasmandas</h1>
                    <p>Your generous contributions help us empower the Pasmanda community through various initiatives and programs. Every donation, big or small, plays a vital role in making a positive impact in the lives of those in need.</p>
                    <p>By donating to the Pasmanda Vikas Foundation, you are supporting educational programs, community development, and welfare initiatives that uplift marginalized groups within our society.</p>
                    <!-- Donate Now Button -->
<div class="container text-center mb-4">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#donateModal">
        Donate Now
    </button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#qrModal">
        Scan QR Code
    </button>
</div>

<!-- Donate Modal -->
<div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="donateModalLabel">Donate to Pasmanda Vikas Foundation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
         
                <h6>Donate Now </h6>
                <p><strong>PASMANDA VIKAS FOUNDATION</strong></p>
                <p><strong>C/A No.:</strong> 924020050695947</p>
                <p><strong>IFSC CODE:</strong> UTIB0001838</p>
                <p><strong>BRANCH:</strong> MUKHERGJEE NAGAR, NEW DELHI 110009</p>
            </div>
        </div>
    </div>
</div>

<!-- QR Code Modal -->
<div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="qrModalLabel">Scan QR Code for Donations</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="img/qr.png" alt="QR Code" class="img-fluid" style="max-width: 300px;">
                <p class="mt-3">Scan this QR code to donate directly!</p>
            </div>
        </div>
    </div>
</div>


                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="img/images/images2/12.jpg" class="img-fluid rounded w-100" alt="Donation Image">
                        <div class="rounded-bottom">
                            <img src="img/images/images2/11.jpg" class="img-fluid rounded-bottom w-100" alt="Impact Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donation End -->

    <!-- Footer Start -->
    <?php include('includes/footer.php'); ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        // Show bank information when "Donate Now" button is clicked
        document.getElementById('donateBtn').addEventListener('click', function() {
            var bankInfo = document.getElementById('bankInfo');
            if (bankInfo.style.display === 'none') {
                bankInfo.style.display = 'block';
            } else {
                bankInfo.style.display = 'none';
            }
        });
    </script>

</body>

</html>
