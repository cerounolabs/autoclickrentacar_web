<?php

	include 'class/function.php';
	require_once("class.phpmailer.php");
	
	$var01 = 'rsv01';
	$var02 = 'rsv02';
	$var03 = 'rsv03';
	$var04 = 'rsv04';
	$var05 = 'rsv05';
	$var06 = 'rsv06';
	$var07 = 'rsv07';
	$var08 = 'rsv08';
	$var09 = 'rsv09';
	$var10 = 'rsv10';
	$var11 = 'rsv11';
	$var12 = 'rsv12';
	$var13 = 'rsv13';
	$var14 = 'rsv14';
	$var15 = 'rsv15';
	$var16 = 'rsv16';
	$var17 = 'rsv17';
	
	$mailBody = 
	"
	
	<!DOCTYPE html>
<html lang='es'>
	<head>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

		<title>Autoclick | Alquiler de veh&iacute;culos</title>

		<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
		<script type='text/javascript' src='js/fontawesome-markers.min.js'></script>

		<link rel='stylesheet' href='http://autoclickrentacar.com.py/css/style.css' type='text/css'  media='all' />
		<link rel='stylesheet' href='http://autoclickrentacar.com.py/css/color-red.css' type='text/css'  media='all' />
		<link rel='stylesheet' href='http://autoclickrentacar.com.py/css/responsive.css' type='text/css'  media='all' />
		<link href='http://autoclickrentacar.com.py/css/font-awesome.css' rel='stylesheet'>
		<link rel='stylesheet' type='text/css' href='http://autoclickrentacar.com.py/rs-plugin/css/settings.css'>
		<link rel='stylesheet' type='text/css' href='http://autoclickrentacar.com.py/rs-plugin/css/layers.css'>
		<link rel='stylesheet' type='text/css' href='http://autoclickrentacar.com.py/rs-plugin/css/navigation.css'>
		<link rel='stylesheet' type='text/css' href='http://autoclickrentacar.com.py/css/owl.carousel.css'>
		<link rel='stylesheet' type='text/css' href='http://autoclickrentacar.com.py/css/prettyPhoto.css'>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet'> 

		<link rel='shortcut icon' href='http://autoclickrentacar.com.py/favicon.ico' type='image/x-icon' />
	</head>
	
	<body>
		<div class='outer-wrapper'>
			<div class='header-area-2'>
				<div class='header-content'>
					<div class='logo'>
						<img src='http://autoclickrentacar.com.py/images/logo/logo01.png' alt='AUTOCLICK RENT A CAR' />
					</div>
				</div>
			</div>

			<div id='page-header'>
				<h1>Reserva</h1>
				<div class='title-block3'></div>
			</div>
					
			<div class='content-wrapper-outer clearfix'>
				<div class='main-content main-content-full'>
					<div class='clearfix'>
						<div class='full-booking-wrapper full-booking-wrapper-3 clearfix'>
							<div class='contact-form-1'>
								<h4>Detalle Veh&iacute;culo</h4>
								<div class='title-block7'></div>
								<div class='clearfix'>
									<div class='qns-one-half'>
										<p class='clearfix'><strong>C&oacute;digo Reserva:</strong> <span></span></p>
										<p class='clearfix'><strong>Veh&iacute;culo:</strong> <span></span></p>
									</div>
									<div class='qns-one-half last-col'>
										<p class='clearfix'><strong>Cantidad:</strong> <span> Pasajeros</span></p>
										<p class='clearfix'><strong>Airbag:</strong> <span></span></p>
									</div>
								</div>
								<hr class='space2' />

								<h4>Detalle Reserva</h4>
								<div class='title-block7'></div>
								<div class='clearfix'>
									<div class='qns-one-half'>
										<p class='clearfix'><strong>Local Retiro: </strong> <span></span></p>
										<p class='clearfix'><strong>Fecha Retiro: </strong> <span></span></p>
										<p class='clearfix'><strong>Hora Retiro: </strong> <span></span></p>
									</div>
									<div class='qns-one-half last-col'>
										<p class='clearfix'><strong>Local Devoluci&oacute;n:</strong> <span></span></p>
										<p class='clearfix'><strong>Fecha Devoluci&oacute;n:</strong> <span></span></p>
										<p class='clearfix'><strong>Hora Devoluci&oacute;n:</strong> <span></span></p>
									</div>
								</div>
								<hr class='space2' />

								<h4>Detalle Pasajeros</h4>
								<div class='title-block7'></div>
								<div class='clearfix'>
									<div class='qns-one-half'>
										<p class='clearfix'><strong>Nombre:</strong> <span></span></p>
										<p class='clearfix'><strong>Apellido:</strong> <span></span></p>
										<p class='clearfix'><strong>Tipo Doc.:</strong> <span></span></p>
										<p class='clearfix'><strong>N&uacute;mero Doc.:</strong> <span></span></p>
									</div>
									<div class='qns-one-half last-col'>
										<p class='clearfix'><strong>Nacionalidad:</strong> <span></span></p>
										<p class='clearfix'><strong>Fecha Nac.:</strong> <span></span></p>
										<p class='clearfix'><strong>Tel&eacute;fono:</strong> <span></span></p>
										<p class='clearfix'><strong>Correo Electr&oacute;nico:</strong> <span></span></p>
									</div>
								</div>
								<hr class='space2' />
								
								<div class='total-price-display clearfix'>
									<p>Total Precio: <strong>US$ 120.00</strong></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
					
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
		<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js'></script>
		<script type='text/javascript' src='http://autoclickrentacar.com.py/rs-plugin/js/jquery.themepunch.tools.min.js?rev=5.0'></script>
		<script type='text/javascript' src='http://autoclickrentacar.com.py/rs-plugin/js/jquery.themepunch.revolution.min.js?rev=5.0'></script>
		<script type='text/javascript' src='http://autoclickrentacar.com.py/js/owl.carousel.min.js'></script>
		<script type='text/javascript' src='http://autoclickrentacar.com.py/js/jquery.prettyPhoto.js'></script>

		<script type='text/javascript' src='http://autoclickrentacar.com.py/rs-plugin/js/extensions/revolution.extension.video.min.js'></script>
		<script type='text/javascript' src='http://autoclickrentacar.com.py/rs-plugin/js/extensions/revolution.extension.slideanims.min.js'></script>
		<script type='text/javascript' src='http://autoclickrentacar.com.py/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js'></script>
		<script type='text/javascript' src='http://autoclickrentacar.com.py/rs-plugin/js/extensions/revolution.extension.navigation.min.js'></script>

		<script type='text/javascript' src='http://autoclickrentacar.com.py/js/scripts.js'></script>
	</body>
</html>
	
	
	";
	
	$mail 				= new PHPMailer();
	$mailHost			= 'reservas@autoclickrentacar.com.py';
	$mail->IsSMTP();
	$mail->Host 		= '192.185.195.38';
	$mail->SMTPAuth 	= true;
	$mail->Username 	= $mailHost;
	$mail->Password 	= 'Autoclick01';
	$mail->SMTPSecure	= 'tls'; 
	$mail->From 		= $mailHost; 
	$mail->FromName 	= 'Reserva Online';
	$mail->AddAddress('christian@cerouno.com.py');
	$mail->isHTML(true);
	$mail->Subject 		= 'Reserva Online';
	$mail->Body    		= $mailBody;
	$mail->AltBody 		= $mailBody;
	
	if(!$mail->Send()) {
	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   exit;
	} else {
		header('Location: index.php');
	}
?>