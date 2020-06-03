<?php
    // Check for empty fields
    $name = $_POST['name'];
	$userEmail = $_POST['email'];
	$userMessage = $_POST['message'];

	$to 			= "info@mccabe-mcginn.ie";
	$subject 		= "Website email enquiry";
	$body 			= "Information Submitted:";
	$headers = "From: noreply@myaddress.com\n";

	$body .= "\r\n Name: " . $name;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;

	mail($to, $subject, $body, $headers);  
?>