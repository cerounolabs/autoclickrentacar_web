<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="es-ES"> <!--<![endif]-->

<?php
	include 'head.php';
	include 'class/function.php';
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
				<h1>Reserva Paso 1</h1>
				<div class="title-block3"></div>
				<p><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Reserva Paso 1</p>
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
								<div class="step-icon">2.</div>
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
							<h4>Local, Fecha, Hora Reserva</h4>
							<div class="title-block7"></div>
							
							<!-- BEGIN .contact-form-1 -->
							<form action="booking02.php#page-header" class="contact-form-1" method="post">
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<label>Local Retiro</label>
										<select id="rsv01" name="rsv01" style="width:100%; b">
											<option value="1">Asunci&oacute;n</option>
											<option value="2">Aeropuerto</option>
										</select>
									</div>
									<!-- END .qns-one-half -->

									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<label>Local Devoluci&oacute;n</label>
										<select id="rsv02" name="rsv02" style="width:100%; b">
											<option value="1">Asunci&oacute;n</option>
											<option value="2">Aeropuerto</option>
										</select>
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<label>Fecha Retiro</label>
										<input type="text" id="rsv03" name="rsv03" class="datepicker" value="" placeholder="Fecha de retiro" required />
									</div>
									<!-- END .qns-one-half -->

									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<label>Fecha Devoluci&oacute;n</label>
										<input type="text" id="rsv04" name="rsv04" class="datepicker" value="" placeholder="Fecha de devoluc&iacute;n" required />
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								
								<!-- BEGIN .clearfix -->
								<div class="clearfix">
									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half">
										<label>Hora Retiro</label>
										<select id="rsv05" name="rsv05" style="width:100%; b">
											<option value="3">08:00</option>
											<option value="4">08:30</option>
											<option value="5">09:00</option>
											<option value="6">09:30</option>
											<option value="7">10:00</option>
											<option value="8">10:30</option>
											<option value="9">11:00</option>
											<option value="10">11:30</option>
											<option value="11">12:00</option>
											<option value="12">12:30</option>
											<option value="13">13:00</option>
											<option value="14">13:30</option>
											<option value="15">14:00</option>
											<option value="16">14:30</option>
											<option value="17">15:00</option>
											<option value="18">15:30</option>
											<option value="19">16:00</option>
											<option value="20">16:30</option>
											<option value="21">17:00</option>
											<option value="22">17:30</option>
											<option value="23">18:00</option>
											<option value="24">18:30</option>
											<option value="25">19:00</option>
											<option value="26">19:30</option>
											<option value="27">20:00</option>
											<option value="28">20:30</option>
										</select>
									</div>
									<!-- END .qns-one-half -->

									<!-- BEGIN .qns-one-half -->
									<div class="qns-one-half last-col">
										<label>Hora Devoluci&oacute;n</label>
										<select id="rsv06" name="rsv06" style="width:100%; b">
											<option value="3">08:00</option>
											<option value="4">08:30</option>
											<option value="5">09:00</option>
											<option value="6">09:30</option>
											<option value="7">10:00</option>
											<option value="8">10:30</option>
											<option value="9">11:00</option>
											<option value="10">11:30</option>
											<option value="11">12:00</option>
											<option value="12">12:30</option>
											<option value="13">13:00</option>
											<option value="14">13:30</option>
											<option value="15">14:00</option>
											<option value="16">14:30</option>
											<option value="17">15:00</option>
											<option value="18">15:30</option>
											<option value="19">16:00</option>
											<option value="19">16:30</option>
											<option value="19">17:00</option>
											<option value="19">17:30</option>
											<option value="19">18:00</option>
											<option value="20">18:30</option>
											<option value="21">19:00</option>
											<option value="22">19:30</option>
											<option value="23">20:00</option>
											<option value="24">20:30</option>
										</select>
									</div>
									<!-- END .qns-one-half -->
								</div>
								<!-- END .clearfix -->
								
								<button type="submit">
									Seleccionar Veh&iacute;culo <i class="fa fa-angle-right"></i>
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