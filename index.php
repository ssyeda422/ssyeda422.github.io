<?php

if($_POST["hidden"]) {
    $recipient="saniyazsyeda@outlook.com";
    $subject="Form to email message";
    $sender=$_POST["name"];
    $senderEmail=$_POST["_replyto"];
    $message=$_POST["text"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    echo '<script>alert("Thank you! Your message has been sent.")</script>';
}
?>

<?php include_once("index.html"); ?>
