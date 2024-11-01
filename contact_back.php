<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'PHPMailer/PHPMailer.php';
require  'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = 0;                                    // Disable verbose debug output for production
    $mail->isSMTP();                                         // Send using SMTP
    $mail->Host       = 'mail.pasmandavikasfoundation.com';   // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                // Enable SMTP authentication
    $mail->Username   = 'contact@pasmandavikasfoundation.com'; // SMTP username
    $mail->Password   = 'Pasmanda@2024';               // SMTP password
    $mail->SMTPSecure = 'ssl';                               // Enable SSL encryption
    $mail->Port       = 465;                                 // TCP port for SSL (465)

    // Recipient and Sender settings
    $mail->setFrom('contact@pasmandavikasfoundation.com', 'Pasmanda Vikas Foundation Website');
    $mail->addAddress('contact@pasmandavikasfoundation.com', 'Pasmanda Vikas Foundation'); // Add recipient

    // Content settings
    $mail->isHTML(true);                                     // Set email format to HTML
    $mail->Subject = 'New Contact Form Submission';

    // Check if form is submitted and process data
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        // Construct email body with form data
        $mail->Body = "<h3>New Contact Form Submission</h3>
                       <p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Phone:</strong> $phone</p>
                       <p><strong>Message:</strong><br>$message</p>
                       <p><strong>Address:</strong><br>$address</p>";
        
        // Alternative plain text body
        $mail->AltBody = "New Contact Form Submission\n\n" .
                         "Name: $name\n" .
                         "Email: $email\n" .
                         "Phone: $phone\n" .
                         "Message:\n$message".
                         "Address:\n$address";

        // Send the email
        $mail->send();
        echo "<script>alert('Message Sent Successfully');</script>";
        echo "<script>window.open('contact.php','_self')</script>";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
