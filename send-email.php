<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "maramawitdereje93@gmail.com";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
}
?>
