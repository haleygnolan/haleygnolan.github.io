<?php $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$formcontent="From: $name \n Subject: $subject";
$recipient = "haleynolan@protonmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
