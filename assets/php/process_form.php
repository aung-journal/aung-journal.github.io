<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate the form data (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all the fields.";
        exit;
    }

    // Configure your email settings
    $to = "recipient@example.com"; // Change this to your email address
    $subject = "New message from $name";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message delivery failed!";
    }
} else {
    echo "Invalid request method.";
}
?>
