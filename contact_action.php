<?php
$fname = $_POST['fname'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'imdan102@outlook.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";


$to = "imdhyan@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



?>
