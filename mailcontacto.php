<?php

if( isset($_POST["email-address"]) ) {
	require_once("class.phpmailer.php");

	$mail 				= new PHPMailer();
	$mailHost			= 'reservas@autoclickrentacar.com.py';
	$mail->IsSMTP();
	$mail->Host 		= '192.185.195.38';
	$mail->SMTPAuth 	= true;
	$mail->Username 	= $mailHost;
	$mail->Password 	= 'Autoclick01';
	$mail->SMTPSecure	= 'tls'; 
	$mail->From 		= $mailHost; 
	$mail->FromName 	= 'Consulta Online';
	$mail->AddAddress($mailHost);
	$mail->AddReplyTo($_POST['email-address']);
	$mail->isHTML(true);
	$mail->Subject 		= $_POST['email-subject'];
	$mail->Body    		= "<b>DETALLE</b> <br/> CLIENTE: ".$_POST['email-name']."<br/>ASUNTO: ".$_POST['email-subject']."<br/>MENSAJE: ".$_POST['email-content'];
	$mail->AltBody 		= $_POST['email-content'];

	if(!$mail->Send()) {
	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   exit;
	} else {
		header("Location: contact.php");
	}
}

?>