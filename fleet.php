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
			<h1>Nuestra Flota</h1>
			<div class="title-block3"></div>
			<p><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Nuestra Flota</p>
		</div>
		
		<!-- BEGIN .content-wrapper-outer -->
		<div class="content-wrapper-outer clearfix">
			<!-- BEGIN .main-content -->
			<div class="main-content main-content-full">
				<!-- BEGIN .fleet-block-wrapper -->
				<div class="fleet-block-wrapper fleet-3-cols clearfix">
<?php
	for($i = 1; $i < 21; $i++){
		if( ($i % 2) != 0 ) {
			$varFlota = strVehiculo($i);
?>
					<!-- BEGIN .fleet-block -->
					<div class="fleet-block">
						<div class="fleet-block-image">
							<a href="detail.php?flota=<?php echo $i; ?>"><img src="images/flota/600x380/<?php echo $varFlota[4]; ?>" alt="<?php echo $varFlota[0]; ?>" /></a>
						</div>
						<div class="fleet-block-content">
							<div class="fleet-price">US$<?php echo $varFlota[3]; ?></div>
							<h4><a href="detail.php?flota=<?php echo $i; ?>"><?php echo $varFlota[0]; ?></a></h4>
							<div class="title-block3"></div>
							<ul class="list-style4">
								<li><?php echo $varFlota[1]; ?> Pasajeros</li>
								<li><?php echo $varFlota[2]; ?></li>
								<li><?php echo $varFlota[5]; ?></li>
							</ul>
						</div>
					</div>
					<!-- END .fleet-block -->
<?php
		}
	}
?>
				</div>
				<!-- END .fleet-block-wrapper -->
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