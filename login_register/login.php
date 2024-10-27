<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: ../dashboard/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../img/images/logo2.png" type="image/png">
    <title>Pasmanda Vikas foundation - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card shadow-lg border-0 rounded-lg mt-5">
          <div class="card-header">
            <h2 class="text-center">Login</h2>
</div>
<div class="card-body">
                                    <!-- Display Error Message -->
                                   
                                        <div  role="alert" id="loginMessage">
                                          
                                        </div>
                                    
            <form id="loginForm">
                <div class="form-floating mb-3">
                    
                  
                    <input type="text" class="form-control" name="username" id="email" required>

                    <label for="Username">Username</label>
                </div>
                <div class="form-floating mb-3">
                  
                    <input type="password" class="form-control" name="password" id="password" required>

                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                
            </form>
            <div class="text-center mt-3">
             <!--   <a href="register.php">Don't have an account? Register here.</a>-->
                                    </div>
            </div>
          </div>
        </div>
    </div>
</div>

<script>
    // Login Form Submission
    $('#loginForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'login_process.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                // Check response here if needed
                window.location.href = '../dashboard/index.php'; // Redirect to dashboard on success
            },
            error: function(xhr, status, error) {
                $('#loginMessage').html('<div class="alert alert-danger">Login failed. Please check your credentials.</div>');
            }
        });
    });
</script>
</body>
</html>
