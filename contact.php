<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $body = $_POST["body"];


    if (empty($name) || empty($email) || empty($subject) || empty($body)) {
        echo "Please fill in all fields.";
        exit;
    }

    $to = "21harsh12@gmail.com";
    $headers = "From: $email";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\n\n$body";

    mail($to, $subject, $message, $headers);

    echo "Message sent successfully!";
} else {
    echo "Invalid request.";
}
?>
