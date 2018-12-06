<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="es-ES"> <!--<![endif]-->

<?php
	include 'head.php';
	include 'class/function.php';
	
	$var01 = strLocal($_POST['rsv01']);
	$var02 = strLocal($_POST['rsv02']);
	$var03 = $_POST['rsv03'];
	$var04 = $_POST['rsv04'];
	$var05 = strHora($_POST['rsv05']);
	$var06 = strHora($_POST['rsv06']);
	$var07 = strVehiculo($_POST['rsv07']);
	$var08 = $_POST['rsv08'];
	$var09 = $_POST['rsv09'];
	$var10 = strDocumento($_POST['rsv10']);
	$var11 = $_POST['rsv11'];
	$var12 = $_POST['rsv12'];
	$var13 = $_POST['rsv13'];
	$var14 = $_POST['rsv14'];
	$var15 = $_POST['rsv15'];
	$var16 = (dateCantidad($var03, $var04) * $var07[3]);
	$var17 = date('YmdHis');
?>

	<!-- BEGIN body -->
	<body>
		<!-- BEGIN .outer-wrapper -->
		<div class="outer-wrapper">
			<!-- BEGIN .header-area-2 -->
			<div class="header-area-2">
				<!-- BEGIN .top-bar-wrapper -->
				<div class="top-bar-wrapper">
					<!-- BEGIN .top-bar -->
					<div class="top-bar clearfix">
						<!-- BEGIN .top-bar-left -->
						<div class="top-bar-left">
							<p>Servicios de transporte en la ciudad de Asunci&oacute;n</p>
						</div>
						<!-- END .top-bar-left -->

						<!-- BEGIN .top-bar-right -->
						<div class="top-bar-right">
							<ul>
								<li><a href="#">Sobre nosotros</a></li>
								<li><a href="fleet.php">Nuestra flota</a></li>
							</ul>

							<a href="booking.html" class="topright-button"><span>Reserva en l&iacute;nea</span></a>
						</div>
						<!-- END .top-bar-right -->
					</div>
					<!-- END .top-bar -->
				</div>
				<!-- END .top-bar-wrapper -->

				<!-- BEGIN .header-content -->
				<div class="header-content">
					<!-- BEGIN .logo -->
					<div class="logo">
						<img src="images/logo/logo01.png" alt="AUTOCLICK RENT A CAR" />
					</div>
					<!-- END .logo -->

					<!-- BEGIN #primary-navigation -->
					<nav id="primary-navigation" class="navigation-wrapper fixed-navigation clearfix">
						<!-- BEGIN .navigation-inner -->
						<div class="navigation-inner">
							<!-- BEGIN .navigation -->
							<div class="navigation">
								<ul>	
									<li class="menu-item-has-children">
										<a href="index.php">Home</a>
									</li>
									<li class="menu-item-has-children">
										<a href="fleet.php">Nuestra Flota</a>
									</li>
									<li class="current-menu-item current_page_item menu-item-has-children">
										<a href="booking01.php">Reserva</a>
									</li>
									<li class="menu-item-has-children">
										<a href="service.php">Tarifas de Servicio</a>
									</li>
									<li class="menu-item-has-children">
										<a href="contact.php">Contactos</a>
									</li>
								</ul>
							</div>
							<!-- END .navigation -->
						</div>
						<!-- END .navigation-inner -->
					</nav>
					<!-- END #primary-navigation -->

					<div id="mobile-navigation">
						<a href="#search-lightbox" data-gal="prettyPhoto"><i class="fa fa-search"></i></a>
						<a href="#" id="mobile-navigation-btn"><i class="fa fa-bars"></i></a>
					</div>

					<div class="clearboth"></div>

					<!-- BEGIN .mobile-navigation-wrapper -->
					<div class="mobile-navigation-wrapper">	

						<ul>	
							<li class="menu-item-has-children">
								<a href="index.php">Home</a>
							</li>
							<li class="menu-item-has-children">
								<a href="fleet.php">Nuestra Flota</a>
							</li>
							<li class="menu-item-has-children">
								<a href="booking01.php">Reserva</a>
							</li>
							<li class="menu-item-has-children">
								<a href="service.php">Tarifas de Servicio</a>
							</li>
							<li class="menu-item-has-children">
								<a href="contact.php">Contactos</a>
							</li>
						</ul>
					</div>
					<!-- END .mobile-navigation-wrapper -->
				</div>
				<!-- END .header-content -->
			</div>
			<!-- END .header-area-2 -->

			<div id="page-header">
				<h1>Reserva Paso 4</h1>
				<div class="title-block3"></div>
				<p><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Reserva Paso 4</p>
			</div>

			<!-- BEGIN .content-wrapper-outer -->
			<div class="content-wrapper-outer clearfix">
				<!-- BEGIN .main-content -->
				<div class="main-content main-content-full">
					<!-- BEGIN .booking-step-wrapper -->
					<div class="booking-step-wrapper clearfix">
						<div class="step-wrapper clearfix">
							<div class="step-icon-wrapper">
								<div class="step-icon step-icon-current">1.</div>
							</div>
							<div class="step-title">Local, fecha reserva</div>
						</div>

						<div class="step-wrapper clearfix">
							<div class="step-icon-wrapper">
								<div class="step-icon step-icon-current">2.</div>
							</div>
							<div class="step-title">Seleccionar Veh&iacute;culo</div>
						</div>
						
						<div class="step-wrapper clearfix">
							<div class="step-icon-wrapper">
								<div class="step-icon step-icon-current">3.</div>
							</div>
							<div class="step-title">Datos Personales</div>
						</div>
						
						<div class="step-wrapper clearfix">
							<div class="step-icon-wrapper">
								<div class="step-icon step-icon-current">4.</div>
							</div>
							<div class="step-title">Reserva</div>
						</div>
						<div class="step-line"></div>
					</div>
					<!-- END .booking-step-wrapper -->

					<!-- BEGIN .clearfix -->
					<div class="clearfix">
						<!-- BEGIN .full-booking-wrapper -->
						<div class="full-booking-wrapper full-booking-wrapper-3 clearfix">
						<!-- BEGIN .contact-form-1 -->
							<form id="form03" action="mailreserva.php" class="contact-form-1" method="post">
								<h4>Detalle Veh&iacute;culo</h4>
								<div class="title-block7"></div>
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<p class="clearfix"><strong>C&oacute;digo Reserva:</strong> <span><?php echo $var17; ?></span></p>
										<p class="clearfix"><strong>Veh&iacute;culo:</strong> <span><?php echo $var07[0]; ?></span></p>
									</div>
									<!-- END .qns-one-half -->

									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<p class="clearfix"><strong>Garantia:</strong> <span>US$ <?php echo $var07[8]; ?></span></p>
										<p class="clearfix"><strong>Transmisi&oacute;n:</strong> <span><?php echo $var07[2]; ?></span></p>
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								<hr class="space2" />

								<h4>Detalle Reserva</h4>
								<div class="title-block7"></div>
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<p class="clearfix"><strong>Local Retiro: </strong> <span><?php echo $var01; ?></span></p>
										<p class="clearfix"><strong>Fecha Retiro: </strong> <span><?php echo $var03; ?></span></p>
										<p class="clearfix"><strong>Hora Retiro: </strong> <span><?php echo $var05; ?></span></p>
									</div>
									<!-- END .qns-one-half -->

									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<p class="clearfix"><strong>Local Devoluci&oacute;n:</strong> <span><?php echo $var02; ?></span></p>
										<p class="clearfix"><strong>Fecha Devoluci&oacute;n:</strong> <span><?php echo $var04; ?></span></p>
										<p class="clearfix"><strong>Hora Devoluci&oacute;n:</strong> <span><?php echo $var06; ?></span></p>
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								<hr class="space2" />

								<h4>Detalle Pasajeros</h4>
								<div class="title-block7"></div>
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<p class="clearfix"><strong>Nombre:</strong> <span><?php echo $var08; ?></span></p>
										<p class="clearfix"><strong>Apellido:</strong> <span><?php echo $var09; ?></span></p>
										<p class="clearfix"><strong>Tipo Doc.:</strong> <span><?php echo $var10; ?></span></p>
										<p class="clearfix"><strong>N&uacute;mero Doc.:</strong> <span><?php echo $var11; ?></span></p>
									</div>
									<!-- END .qns-one-half -->

									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<p class="clearfix"><strong>Nacionalidad:</strong> <span><?php echo $var14; ?></span></p>
										<p class="clearfix"><strong>Fecha Nac.:</strong> <span><?php echo $var15; ?></span></p>
										<p class="clearfix"><strong>Tel&eacute;fono:</strong> <span><?php echo $var12; ?></span></p>
										<p class="clearfix"><strong>Correo Electr&oacute;nico:</strong> <span><?php echo $var13; ?></span></p>
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								<hr class="space2" />
								
								<input type="hidden" id="rsv01" name="rsv01" value="<?php echo $_POST['rsv01']; ?>" />
								<input type="hidden" id="rsv02" name="rsv02" value="<?php echo $_POST['rsv02']; ?>" />
								<input type="hidden" id="rsv03" name="rsv03" value="<?php echo $_POST['rsv03']; ?>" />
								<input type="hidden" id="rsv04" name="rsv04" value="<?php echo $_POST['rsv04']; ?>" />
								<input type="hidden" id="rsv05" name="rsv05" value="<?php echo $_POST['rsv05']; ?>" />
								<input type="hidden" id="rsv06" name="rsv06" value="<?php echo $_POST['rsv06']; ?>" />
								<input type="hidden" id="rsv07" name="rsv07" value="<?php echo $_POST['rsv07']; ?>" />
								<input type="hidden" id="rsv08" name="rsv08" value="<?php echo $_POST['rsv08']; ?>" />
								<input type="hidden" id="rsv09" name="rsv09" value="<?php echo $_POST['rsv09']; ?>" />
								<input type="hidden" id="rsv10" name="rsv10" value="<?php echo $_POST['rsv10']; ?>" />
								<input type="hidden" id="rsv11" name="rsv11" value="<?php echo $_POST['rsv11']; ?>" />
								<input type="hidden" id="rsv12" name="rsv12" value="<?php echo $_POST['rsv12']; ?>" />
								<input type="hidden" id="rsv13" name="rsv13" value="<?php echo $_POST['rsv13']; ?>" />
								<input type="hidden" id="rsv14" name="rsv14" value="<?php echo $_POST['rsv14']; ?>" />
								<input type="hidden" id="rsv15" name="rsv15" value="<?php echo $_POST['rsv15']; ?>" />
								<input type="hidden" id="rsv16" name="rsv16" value="<?php echo $var16; ?>" />
								<input type="hidden" id="rsv17" name="rsv17" value="<?php echo $var17; ?>" />

								<div class="total-price-display clearfix">
									<p>Total Precio: <strong>US$ <?php echo $var16.'.00'; ?></strong></p>
									<button type="submit" class="payment-button">
										Confirmar
									</button>
								</div>
							</form>
						<!-- END .full-booking-wrapper -->
						</div>
					</div>
					<!-- END .clearfix -->
				</div>
				<!-- END .main-content -->
			</div>
			<!-- END .content-wrapper-outer -->

<?php
	include 'footer.php';
?>
		
		</div>
<?php
	include 'script.php';
?>

	</body>
	<!-- END body -->
</html>