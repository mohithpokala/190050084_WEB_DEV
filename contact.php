<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["emailId"];
	$subject = $_POST["subject"];

	$toEmail = "mohithpokala111@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject,  $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>
