<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Here you can process the form submission, for example, send an email to your company's email address.
    // This is just a basic example, replace it with your actual implementation.
    $to = "your-email@example.com";
    $subject = "Contact Form Submission - $subject";
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully.";
    } else {
        echo "Message could not be sent.";
    }
}
?>
