<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];


$email_form = 'amirul.ds@website.com' ;

$email_subject = 'New From Submission';
$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User massage: $massage.\n";


$to = 'amirulkhan.khulna.bd@gmail.com';

$headers = "From: $email_form \r\n";
$headers .= "Reply-To: $visitor_email";



mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>