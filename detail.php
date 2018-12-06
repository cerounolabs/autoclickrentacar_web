<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="es-ES"> <!--<![endif]-->

<?php
	include 'head.php';
	include 'class/function.php';
	
	$varFlota = strVehiculo($_GET['flota']);
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
								<li class="current-menu-item current_page_item menu-item-has-children">
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
						<li class="current-menu-item current_page_item menu-item-has-children">
							<a href="fleet.php">Nuestra Flota</a>
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
			<h1>Veh&iacute;culo</h1>
			<div class="title-block3"></div>
			<p><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Veh&iacute;culo</p>
		</div>
		
		<!-- BEGIN .content-wrapper-outer -->
		<div class="content-wrapper-outer clearfix">
			<!-- BEGIN .main-content -->
			<div class="main-content">
				<!-- BEGIN .rev_slider_wrapper2 -->
				<div class="rev_slider_wrapper2">	
					<!-- BEGIN #slider1 -->
					<div id="slider2" class="rev_slider" data-version="5.0">
						<ul>
<?php
	for($i = 1; $i < 6; $i++){
?>
							<!-- BEGIN .Slide 1 -->
							<li data-transition="fade">
								<img src="images/galeria/<?php echo $varFlota[9].'_'.$i; ?>.png"  alt="<?php echo $varFlota[0]; ?>" width="800" height="441">
								<div class="tp-caption rev-custom-caption-1"
									data-x="center"
									data-y="center"
									data-whitespace="normal"
									data-transform_idle="o:1;"
									data-transform_in="o:0"
									data-transform_out="o:0"
									data-start="500">
								</div>
							</li>
							<!-- END .Slide 1 -->
<?php
	}
?>
						</ul>
					</div>
					<!-- END #slider1 -->
				</div>
				<!-- END .rev_slider_wrapper2 -->
				
				<h4><?php echo $varFlota[0]; ?></h4>
				<div class="title-block7"></div>
			
				<p><?php echo $varFlota[6]; ?></p>
			</div>
			<!-- END .main-content -->
			
			<!-- BEGIN .sidebar-content -->
			<div class="sidebar-content">
				
				<!-- BEGIN .widget -->
				<div class="widget">
					<div class="widget-block"></div>
					
					<h3>Opciones</h3>
				
					<div class="pricing-options-widget">
						<ul>
							<li class="hour-pricing-option"><strong>US$<?php echo $varFlota[3]; ?></strong>  100 Km / D&iacute;a</li>
							<li class="day-pricing-option"><strong>US$<?php echo $varFlota[7]; ?></strong> Ilimitado Km / D&iacute;a</li>
							<li class="airport-pricing-option"><strong>US$<?php echo $varFlota[8]; ?></strong> Garant&iacute;a obligatoria</li>
						</ul>
					</div>
				</div>
				<!-- END .widget -->
			</div>
			<!-- END .sidebar-content -->
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