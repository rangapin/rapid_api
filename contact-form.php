<?php 

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email_from = $_POST['mail'];
    $message = $_POST['message'];

    $mail_to = "richardangapin@yahoo.co.uk";
    $header = "From: " .$email_from;
    $text = "You have received an email from " .$name. ".\n\n" . $message;

    mail($mail_to, $subject, $text, $header);
    header("Location: index.php?mailsend");
}
