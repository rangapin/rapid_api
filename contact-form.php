<?php

if (isset($_POST['send_email'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email_from = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $mail_to = "richardangapin@yahoo.co.uk";
    $header = "From: " . $email_from;
    $text = "You have received an email from " . $name . ".\n\n" . $message;

    if (mail($mail_to, $subject, $text, $header)) {
        echo 'Email sent successfully.';
        header("Location: index.php?mailsend");
    } else {
        echo 'Error sending email.';
    }
}
?>

