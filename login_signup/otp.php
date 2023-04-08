<?php


$to_email = "rojanshah9@gmail.com";
$subject = "Simple Mail Test Via Php";
$body = "Hi ruwal";
$headers = "From: ruwalkumarshah@gmail.com";

if(mail($to_email, $subject, $body,$headers)) {
	echo "Email Sent successfully to $to_email....";
} else {
	echo "Email Sending Failed";
}




 ?>