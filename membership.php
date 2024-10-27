<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/images/logo2.png" type="image/png">
    <title>Pasmanda Vikas Foundation - Members</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="members, community, Pasmanda Vikas Foundation" name="keywords">
    <meta content="View the list of members in Pasmanda Vikas Foundation and add new members." name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
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

    <!-- Navbar & Hero Start -->
    <?php include('includes/navbar.php'); ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Membership</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Membership</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->
                  
    <div class="container mt-5">
        <h2 class="text-center mb-4">Apply For Membership</h2>
        <div id="response" class="alert d-none mt-3" role="alert"></div> 
        <div id="response" class="alert alert-success mt-3 d-none"></div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form id="membership" enctype="multipart/form-data">
                    <div class="row">
                        <!-- First Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                        </div>
                        <!-- Second Column -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image (Optional):</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <!-- Image preview -->
                                <div class="mt-3">
                                    <img id="imagePreview" src="default-avatar.png" alt="Image Preview" style="max-width: 200px; height: 200px; display: block;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary mt-3">Apply</button>
                </form>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Footer Start -->
    <?php include('includes/footer.php'); ?>
    <!-- Copyright End -->

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
        // JavaScript for Image Preview
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').src = e.target.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            }
        });


        
        $(document).ready(function () {
    $('#membership').on('submit', function (e) {
        e.preventDefault(); // Prevent default form submission

        let formData = new FormData(this); // Get form data

        // Perform AJAX request
        $.ajax({
            url: 'save_membership.php', // Your PHP file to handle the request
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                // Clear previous response messages
                $('#response').removeClass('d-none alert-danger').addClass('alert-success').text(response);

                // Optionally reset the form after successful submission
                $('#membership')[0].reset(); // Reset the form
            },
            error: function (xhr) {
                // Handle the error scenario
                $('#response').removeClass('d-none alert-success').addClass('alert-danger').text('Error: ' + xhr.responseText);
            }
        });
    });
});

    </script>
</body>
</html>
