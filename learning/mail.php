<?php 
$otp = rand(000000,999999);
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'phpmailer/vendor/autoload.php'; 

$mail = new PHPMailer(true); 

try { 
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();											 
	$mail->Host	 = 'smtp.gmail.com';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'bobhell227@gmail.com';				 
	$mail->Password = 'bobhell5545023@#';						 
	$mail->SMTPSecure = 'ssl';							 
	$mail->Port	 = 465; 

	$mail->setFrom('bobhell227@gmail.com', 'E-LEARNING');		 
	$mail->addAddress('sanjubodra1420@gmail.com');
	$mail->addAddress('sanjubodra1420@gmail.com'); 
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Reset Password'; 
	$mail->Body = 'This is your OTP : <b>'.$otp.'</b>'; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send(); 
	echo "Mail has been sent successfully!"; 
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
} 

?> 
