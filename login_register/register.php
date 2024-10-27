<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Register</h2>
    <form id="registerForm">
        <div class="form-group mb-3">
            <label>Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group mb-3">
            <label>Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <div id="registerMessage" class="mt-2"></div>
    </form>
    <div class="text-center mt-3">
        <a href="login.php">Already have an account? Login here.</a>
    </div>
</div>

<script>
    // Register Form Submission
    $('#registerForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'register_process.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#registerMessage').html(response);
            }
        });
    });
</script>
</body>
</html>
