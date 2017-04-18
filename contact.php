<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$to = "jsd42@njit.edu";
	$subject = "Contact from website";

	$msg = "Name: ".$name."<br>";
	$msg .= "Email: ".$email."<br>";
	$msg .= "Phone: ".$phone."<br>";
	$msg .= "Message: ".$message."<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$msg,$headers);
?>