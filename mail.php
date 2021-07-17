<?php
$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];
$formcontent="From: $name \n Subject: $content";
$recipient = "haleynolan@protonmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
