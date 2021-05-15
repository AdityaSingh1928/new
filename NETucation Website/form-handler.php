<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$contact = $_POST['contact'];
$subject = $_POST['suject'];
$message = $_POST['message'];

$email_from = 'netucationindia@Netucation.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Contact: $contact.\n".
              "Subject: $subject.\n".
              "User message: $message.\n";

$to = 'netucationindia@gmail.com';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html");


?>