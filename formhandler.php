<?php
$name = $_POST[""];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


$email_from = 'websitedesign.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name./n".
              "User email: $visitor_email./n".
              "Subject: $subject./n".
              "User message: $message.\n";


$to = 'allanmateche@gmail.com';
$headers = "From: $email_from\r\n";
$headers = "Reply_To: $visito_email\r\n";


mail($to,$email_subject,$email_body,$headers);
header("location: Contact.html")

?>
