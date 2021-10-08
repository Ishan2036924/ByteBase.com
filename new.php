<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$number=$_POST['number'];
$message=$_POST['message'];

$email_from='bytebase.com';
$email_subject='new form submission';
$email_body="user name:$name.\n".
			"User Email:$visitor_email.\n".
			"Subject:$subject.\n".
			"Number:$number.\n".
			"User Message :$message.\n";
$to='coolishan12345@gmail.com';
$headers="form:$email_from \r\n";
$headers.="reply-to:$visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers)
header("Location:contact.html")
?>


