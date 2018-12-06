<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="es-ES"> <!--<![endif]-->

<?php
	include 'head.php';
	include 'class/function.php';
	
	$var01 = $_POST['rsv01'];
	$var02 = $_POST['rsv02'];
	$var03 = $_POST['rsv03'];
	$var04 = $_POST['rsv04'];
	$var05 = $_POST['rsv05'];
	$var06 = $_POST['rsv06'];
	$var07 = $_POST['rsv07'];
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
				<h1>Reserva Paso 3</h1>
				<div class="title-block3"></div>
				<p><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Reserva Paso 3</p>
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
								<div class="step-icon">4.</div>
							</div>
							<div class="step-title">Reserva</div>
						</div>
						<div class="step-line"></div>
					</div>
					<!-- END .booking-step-wrapper -->

					<!-- BEGIN .clearfix -->
					<div class="clearfix">
						<!-- BEGIN .trip-details-wrapper -->
						<div class="trip-details-wrapper clearfix">
							<h4>Datos Personales</h4>
							<div class="title-block7"></div>
							
							<!-- BEGIN .contact-form-1 -->
							<form id="form03" action="booking04.php#page-header" class="contact-form-1" method="post">
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<label>Nombre</label>
										<input type="text" id="rsv08" name="rsv08" value="" style="text-transform:uppercase" required/>
									</div>
									<!-- END .qns-one-half -->
								
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<label>Apellido</label>
										<input type="text" id="rsv09" name="rsv09" value="" style="text-transform:uppercase" required/>
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<label>Tipo Doc.</label>
										<select id="rsv10" name="rsv10" style="width:100%; b">
											<option value="1">C.I.N.</option>
											<option value="2">D.N.I.</option>
											<option value="3">Pasaporte</option>
										</select>
									</div>
									<!-- END .qns-one-half -->
								
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<label>N&uacute;mero Doc.</label>
										<input type="text" id="rsv11" name="rsv11" value="" style="text-transform:uppercase" required/>
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<label>Nacionalidad</label>
										<input type="text" id="rsv14" name="rsv14" value="" style="text-transform:uppercase" required/>
									</div>
									<!-- END .qns-one-half -->
									
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<label>Fecha Nac.</label>
										<input type="text" id="rsv15" name="rsv15" value="" required/>
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<label>Tel&eacute;fono/C&eacute;lular</label>
										<input type="text" id="rsv12" name="rsv12" value="" required/>
									</div>
									<!-- END .qns-one-half -->
								
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<label>Correo Electr&oacute;nico</label>
										<input type="text" id="rsv13" name="rsv13" value="" required/>
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								
								<input type="hidden" id="rsv01" name="rsv01" value="<?php echo $var01; ?>" />
								<input type="hidden" id="rsv02" name="rsv02" value="<?php echo $var02; ?>" />
								<input type="hidden" id="rsv03" name="rsv03" value="<?php echo $var03; ?>" />
								<input type="hidden" id="rsv04" name="rsv04" value="<?php echo $var04; ?>" />
								<input type="hidden" id="rsv05" name="rsv05" value="<?php echo $var05; ?>" />
								<input type="hidden" id="rsv06" name="rsv06" value="<?php echo $var06; ?>" />
								<input type="hidden" id="rsv07" name="rsv07" value="<?php echo $var07; ?>" />
								
								<button type="submit">
									Confirmar <i class="fa fa-angle-right"></i>
								</button>
							</form>
							<!-- END .contact-form-1 -->
						</div>
						<!-- END .trip-details-wrapper -->
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