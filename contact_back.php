  

<?php
$errors = [];
$errorMessage = '';
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
      $phone = $_POST['phone'];
    if (empty($name)) {
        $errors[] = 'Name is empty';
    }
    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }
    if (empty($message)) {
        $errors[] = 'Message is empty';
    }
    if (empty($errors)) {
        $toEmail = 'contact@pasmandavikasfoundation.com';
        $emailSubject = 'New email from your contant form';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];
        $body='Message:'.$message . "\r\n";
        $body.=', Name:'.$name . "\r\n";
        $body.=', Phone:'.$phone . "\r\n";
 $body.=', Email:'.$email . "\r\n";
        if (mail($toEmail, $emailSubject, $body, $headers)) {
            echo"<script>alert('Message Sent Successfuly');</script>";
   echo "<script>window.open('contact','_self')</script>";
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}
?>
