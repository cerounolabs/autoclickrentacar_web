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
	
	if (empty($var02) || empty($var06)) {
		$var02 = $_POST['rsv01'];
		$var06 = $_POST['rsv05'];
	}
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
				<h1>Reserva Paso 2</h1>
				<div class="title-block3"></div>
				<p><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Reserva Paso 2</p>
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
								<div class="step-icon">3.</div>
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
							<h4>Seleccione un Veh&iacute;culo</h4>
							<div class="title-block7"></div>
							
							<!-- BEGIN .contact-form-1 -->
							<form id="form02" action="booking03.php#page-header" class="contact-form-1" method="post">
								<!-- BEGIN .vehicle-section -->
								<div id="veh01" class="vehicle-section clearfix">
									<p>Kia Picanto o Similar 
										<br>
										<strong><input id="veh01_1" type="radio" name="rsv07" value="1" onclick="selectVehiculo(this.id);"> US$36.00 100 Km</strong>
										<strong><input id="veh01_2" type="radio" name="rsv07" value="2" onclick="selectVehiculo(this.id);"> US$80.00 Km Ilimitado</strong>
									</p>
									<img src="images/flota/350x160/kia_picanto_2018.png" alt="Kia Picanto" />
								</div>
								<!-- END .vehicle-section -->

								<!-- BEGIN .vehicle-section -->
								<div id="veh02" class="vehicle-section clearfix">
									<p>Toyota Etios o Similar
										<br>
										<strong><input id="veh02_1" type="radio" name="rsv02" value="3" onclick="selectVehiculo(this.id);"> US$40.00 100 Km</strong>
										<strong><input id="veh02_2" type="radio" name="rsv02" value="4" onclick="selectVehiculo(this.id);"> US$90.00 Km Ilimitado</strong>
									</p>
									<img src="images/flota/350x160/toyota_etios_2018.png" alt="Toyota Etios" />
								</div>
								<!-- END .vehicle-section -->

								<!-- BEGIN .vehicle-section -->
								<div id="veh03" class="vehicle-section clearfix">
									<p>Kia Rio Sedan o Similar 
										<br>
										<strong><input id="veh03_1" type="radio" name="rsv03" value="5" onclick="selectVehiculo(this.id);"> US$44.00 100 Km</strong>
										<strong><input id="veh03_2" type="radio" name="rsv03" value="6" onclick="selectVehiculo(this.id);"> US$101.00 Km Ilimitado</strong>
									</p>
									<img src="images/flota/350x160/kia_rio_2018.png" alt="Kia Rio Sedan" />
								</div>
								<!-- END .vehicle-section -->

								<!-- BEGIN .vehicle-section -->
								<div id="veh04" class="vehicle-section clearfix">
									<p>Kia Cerato o Similar
										<br>
										<strong><input id="veh04_1" type="radio" name="rsv04" value="7" onclick="selectVehiculo(this.id);"> US$56.00 100 Km</strong>
										<strong><input id="veh04_2" type="radio" name="rsv04" value="8" onclick="selectVehiculo(this.id);"> US$140.00 Km Ilimitado</strong>
									</p>
									<img src="images/flota/350x160/kia_cerato_2018.png" alt="Kia Cerato Pro 2G" />
								</div>
								<!-- END .vehicle-section -->

								<!-- BEGIN .vehicle-section -->
								<div id="veh05" class="vehicle-section clearfix">
									<p>Toyota Corolla o Similar
										<br>
										<strong><input id="veh05_1" type="radio" name="rsv05" value="9" onclick="selectVehiculo(this.id);"> US$66.00 100 Km</strong>
										<strong><input id="veh05_2" type="radio" name="rsv05" value="10" onclick="selectVehiculo(this.id);"> US$0.00 Km Ilimitado</strong>
									</p>
									<img src="images/flota/350x160/toyota_corolla_2018.png" alt="Toyota Corolla" />
								</div>
								<!-- END .vehicle-section -->

								<!-- BEGIN .vehicle-section -->
								<div id="veh06" class="vehicle-section clearfix">
									<p>Kia Sportage o Similar
										<br>
										<strong><input id="veh06_1" type="radio" name="rsv06" value="11" onclick="selectVehiculo(this.id);"> US$76.00 100 Km</strong>
										<strong><input id="veh06_2" type="radio" name="rsv06" value="12" onclick="selectVehiculo(this.id);"> US$190.00 Km Ilimitado</strong>
									</p>
									<img src="images/flota/350x160/kia_sportage_2018.png" alt="Kia Sportage" />
								</div>
								<!-- END .vehicle-section -->

								<!-- BEGIN .vehicle-section -->
								<div id="veh07" class="vehicle-section clearfix">
									<p>Hyundai H1 o Similar
										<br>
										<strong><input id="veh07_1" type="radio" name="rsv07" value="13" onclick="selectVehiculo(this.id);"> US$120.00 100 Km</strong>
										<strong><input id="veh07_2" type="radio" name="rsv07" value="14" onclick="selectVehiculo(this.id);"> US$210.00 Km Ilimitado</strong>
									</p>
									<img src="images/flota/350x160/hyundai_h1_2018.png" alt="Hyundai H1" />
								</div>
								<!-- END .vehicle-section -->

								<!-- BEGIN .vehicle-section -->
								<div id="veh08" class="vehicle-section clearfix">
									<p>Chevrolet S10 LTZ o Similar
										<br>
										<strong><input id="veh08_1" type="radio" name="rsv08" value="15" onclick="selectVehiculo(this.id);"> US$130.00 100 Km</strong>
										<strong><input id="veh08_2" type="radio" name="rsv08" value="16" onclick="selectVehiculo(this.id);"> US$255.00 Km Ilimitado</strong>
									</p>
									<img src="images/flota/350x160/chevrolet_s10_2018.png" alt="Chevrolet S10 LTZ" />
								</div>
								<!-- END .vehicle-section -->
								
								<input type="hidden" id="rsv01" name="rsv01" value="<?php echo $var01; ?>" />
								<input type="hidden" id="rsv02" name="rsv02" value="<?php echo $var02; ?>" />
								<input type="hidden" id="rsv03" name="rsv03" value="<?php echo $var03; ?>" />
								<input type="hidden" id="rsv04" name="rsv04" value="<?php echo $var04; ?>" />
								<input type="hidden" id="rsv05" name="rsv05" value="<?php echo $var05; ?>" />
								<input type="hidden" id="rsv06" name="rsv06" value="<?php echo $var06; ?>" />
								<input type="hidden" id="rsv07" name="rsv07" value="<?php echo $var07; ?>" />
								
								<button id="btn-02" type="submit" style="display:none;" disabled>
									Datos Personales <i class="fa fa-angle-right"></i>
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