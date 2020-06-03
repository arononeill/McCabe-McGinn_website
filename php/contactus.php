<?php
	echo 'php';
    // Check for empty fields
    $name = $_POST['name'];
	$userEmail = $_POST['email'];
	$userMessage = $_POST['message'];

	$to 			= "arononeill98@gmail.com";
	$subject 		= "Website email enquiry";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $name;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;

	mail($to, $subject, $body);  
?>