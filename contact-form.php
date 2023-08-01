<?php

if (isset($_POST['send_email'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email_from = $_POST['mail'];
    $message = $_POST['message'];

    $mail_to = "richardangapin@yahoo.co.uk";
    $header = "From: " . $email_from;
    $text = "You have received an email from " . $name . ".\n\n" . $message;

    if (mail($mail_to, $subject, $text, $header)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error sending email.';
    }
}

header("Location: index.php?mailsend");

