<?php

if($_POST["submit"]) {
    $recipient="saniyazsyeda@outlook.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["_replyto"];
    $message=$_POST["text"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

//     $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>
