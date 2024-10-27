<?php
session_start();
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$uname'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            // Redirect to dashboard after successful login
            header("Location: ../dashboard/index.php");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with that email.";
    }
}
?>
