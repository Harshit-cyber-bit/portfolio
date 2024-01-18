<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $body = $_POST["body"];

    // Validate data (you can add more validation as needed)

    if (empty($name) || empty($email) || empty($subject) || empty($body)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Send email
    $to = "your-email@example.com"; // replace with your email address
    $headers = "From: $email";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\n\n$body";

    mail($to, $subject, $message, $headers);

    echo "Message sent successfully!";
} else {
    echo "Invalid request.";
}
?>
