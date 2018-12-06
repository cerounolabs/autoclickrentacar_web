<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="es-ES"> <!--<![endif]-->

<?php
	include 'head.php';
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
					<!-- END .top-bar-left -->
					</div>
					
					<!-- BEGIN .top-bar-right -->
					<div class="top-bar-right">
						<ul>
							<li><a href="#">Sobre nosotros</a></li>
							<li><a href="fleet.php">Nuestra flota</a></li>
						</ul>
						
						<a href="booking01.php" class="topright-button"><span>Reserva en l&iacute;nea</span></a>
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
								<li class="menu-item-has-children">
									<a href="booking01.php">Reserva</a>
								</li>
								<li class="menu-item-has-children">
									<a href="service.php">Tarifas de Servicio</a>
								</li>
								<li class="current-menu-item current_page_item menu-item-has-children">
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
			<h1>Contactos</h1>
			<div class="title-block3"></div>
			<p><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Contactos</p>
		</div>
		
		<!-- BEGIN .content-wrapper-outer -->
		<div class="content-wrapper-outer clearfix">
			
			<!-- BEGIN .main-content -->
			<div class="main-content main-content-full">
				
				<!-- BEGIN .clearfix -->
				<div class="clearfix">
					
					<!-- BEGIN .qns-one-half -->
					<div class="qns-one-half">
						
						<h4>Cont&aacute;ctanos</h4>
						<div class="title-block7"></div>
					
						<p></p>
						
						<!-- BEGIN .contact-form-1 -->
						<form action="mailcontacto.php" class="contact-form-1" method="post">

							<label>Nombre <span>*</span></label>
							<input type="text" name="email-name" class="required-form-field" value="" />

							<label>Email <span>*</span></label>
							<input type="text" name="email-address" class="required-form-field" value="" />

							<label>Asunto</label>
							<input type="text" name="email-subject" value="" />

							<label>Mensaje <span>*</span></label>
							<textarea cols="10" rows="9" name="email-content" class="required-form-field"></textarea>	

							<button type="submit" class="sendemail">
				 				Enviar <i class="fa fa-envelope"></i>
							</button>

						<!-- END .contact-form-1 -->
						</form>
						
					<!-- END .qns-one-half -->
					</div>
					
					<!-- BEGIN .qns-one-half -->
					<div class="qns-one-half qns-last">
						
						<h4>Direcci&oacute;n</h4>
						<div class="title-block7"></div>
							
						<ul class="contact-details-list">
							<li class="cdw-address clearfix">Mcal. L&oacute;pez 4219 c/ Capit&aacute;n Motta, Asunci&oacute;n - Paraguay</li>
							<li class="cdw-phone clearfix">+595 21 601025&nbsp;&nbsp;&nbsp;+595 992 229034</li>
							<li class="cdw-email clearfix">reservas@autoclickrentacar.com.py</li>
						</ul>
						
						<h4>Social Media</h4>
						<div class="title-block7"></div>
						
						<ul class="social-links clearfix">
							<li><a href="https://www.facebook.com/rentacarautoclick/" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/autoclickrentacar/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
						
						<hr class="space5" />
						
						<!-- BEGIN #google-map -->
						<div id="google-map" style="height: 370px;margin: 0 0 70px 0;"></div>

						<script type="text/javascript">

							function initialize() {

								// Set Location
								var myLatlng = new google.maps.LatLng(-25.296214,-57.574239);

								// Set Style
								var styles = [
								    {
								      stylers: [
								        { hue: "#e8848e" },
								        { saturation: -50 }
								      ]
								    },{
								      featureType: "road",
								      elementType: "geometry",
								      stylers: [
								        { lightness: 100 },
								        { visibility: "simplified" }
								      ]
								    },{
								      featureType: "road",
								      elementType: "labels",
								      stylers: [
								        { visibility: "off" }
								      ]
								    }
								  ];

								// Set Map Options
								var mapOptions = {
									mapTypeControlOptions: {
										mapTypeIds: ['Styled']
									},
									center: myLatlng,
									zoom: 14,
									mapTypeId: 'Styled',
									scrollwheel: false,
									scaleControl: false,
									disableDefaultUI: false
								};

								// Build Map
								var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
								var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
								map.mapTypes.set('Styled', styledMapType);

								// Set Map Marker
								var contentString = 'Our Retirement Home';
								var infowindow = new google.maps.InfoWindow({
									content: contentString
								});
								var marker = new google.maps.Marker({
									position: myLatlng,
									map: map,
									title: 'AUTOCLICK Rent a car',
									icon: {
									        path: fontawesome.markers.MAP_MARKER,
									        scale: 0.8,
									        strokeWeight: 0,
									        strokeColor: 'black',
									        strokeOpacity: 1,
									        fillColor: '#cc4452',
									        fillOpacity: 1,
									    },
								});

								// Display Map Marker
								google.maps.event.addListener(marker, 'click', function() {
									infowindow.open(map,marker);
								});

							}

							// Display Map
							google.maps.event.addDomListener(window, 'load', initialize);

						</script>
						
					<!-- END .qns-one-half -->
					</div>
				
				<!-- END .clearfix -->
				</div>
				
			<!-- END .main-content -->
			</div>
		
		<!-- END .content-wrapper-outer -->
		</div>
			
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