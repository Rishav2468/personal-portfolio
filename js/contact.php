<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "rishavagarwal595@gmail.com";  // Your Gmail address

    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    $mailSuccess = mail($to, $subject, $message, $headers);

    if ($mailSuccess) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
