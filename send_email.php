<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = 'your-email@example.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';

    // Email content
    $emailBody = "Name: $name\n";
    $emailBody .= "Phone: $phone\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $emailBody, $headers)) {
        echo 'Thank you for contacting us! We will get back to you soon.';
    } else {
        echo 'There was an error sending your message. Please try again.';
    }
}
?>
