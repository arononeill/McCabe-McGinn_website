<?php
    // Check for empty fields
    $name = $_POST['name'];
	$userEmail = $_POST['email'];
	$userMessage = $_POST['message'];

	$to 			= "info@mcabe-mcginn.ie";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $name;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;

	mail($to, $subject, $body);  
?>