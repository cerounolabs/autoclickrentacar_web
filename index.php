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
									<li class="current-menu-item current_page_item menu-item-has-children">
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
							<li class="current-menu-item current_page_item menu-item-has-children">
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

			<!-- BEGIN .large-header-wrapper -->
			<div class="large-header-wrapper">
				<!-- BEGIN .large-header -->
				<div class="large-header">
					<!-- BEGIN .header-booking-form-wrapper -->
					<div class="header-booking-form-wrapper">
						<!-- BEGIN #booking-tabs -->
						<div id="booking-tabs">
							<ul class="nav clearfix">
								<li><a href="#tab-one-way">Servicio por d&iacute;a</a></li>
							</ul>
							<!-- BEGIN #tab-one-way -->
							<div id="tab-one-way">
<?php
								include 'form_reserva.php';
?>
							</div>
							<!-- END #tab-one-way -->
						</div>
						<!-- END #booking-tabs -->
					</div>
					<!-- END .header-booking-form-wrapper -->
				</div>
				<!-- END .large-header -->
			</div>
			<!-- END .large-header-wrapper -->

			<!-- BEGIN .content-wrapper-outer -->
			<section class="content-wrapper-outer content-wrapper clearfix our-fleet-sections">

				<h3 class="center-title">Nuestra Flota</h3>
				<div class="title-block2"></div>

				<p class="fleet-intro-text">Elija entre una amplia selecci&oacute;n de veh&iacute;culos que van desde compactos, familiares hasta de lujos, tenemos todo tipo de veh&iacute;culos disponibles para satisfacer sus necesidades. Tambi&eacute;n tomamos pedidos personalizados y lo ayudaremos a adquirir un veh&iacute;culo espec&iacute;fico.</p>

				<!-- BEGIN .fleet-block-wrapper -->
				<div class="owl-carousel1 fleet-block-wrapper">
<?php
	for($i = 1; $i < 17; $i++){
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
			</section>
			<!-- END .content-wrapper-outer -->

			<!-- BEGIN .content-wrapper-outer -->
			<section class=".content-wrapper-outer clearfix call-to-action-1-section">

				<div class="call-to-action-1-section-inner">

					<h3>AutoClick tiene una amplia gama de opciones de precios para satisfacer todas sus necesidades</h3>
					<a href="service.php" class="button0">Ver precios</a>

				</div>

			<!-- END .content-wrapper-outer -->
			</section>

			<!-- BEGIN .content-wrapper-outer -->
			<section class="content-wrapper-outer home-icons-outer-wrapper-2">

				<!-- BEGIN .clearfix -->
				<div class="clearfix">

					<!-- BEGIN .qns-one-third -->
					<div class="qns-one-half home-icon-wrapper-2">
						<div class="qns-home-icon"><i class="fa fa-calendar-check-o"></i></div>
						<div class="home-icon-inner">
							<h4>F&aacute;cil reserva en l&uacute;nea</h4>
							<div class="title-block3"></div>
							<p></p>
						</div>
					<!-- END .qns-one-third -->
					</div>

					<!-- BEGIN .qns-one-third -->
					<div class="qns-one-half home-icon-wrapper-2 qns-last">
						<div class="qns-home-icon"><i class="fa fa-star"></i></div>
						<div class="home-icon-inner">
							<h4>Veh&iacute;culos Premium</h4>
							<div class="title-block3"></div>
							<p></p>
						</div>
					<!-- END .qns-one-third -->
					</div>

					<!-- BEGIN .qns-one-third -->
					<div class="qns-one-half home-icon-wrapper-2">
						<div class="qns-home-icon"><i class="fa fa-car"></i></div>
						<div class="home-icon-inner">
							<h4>Gran flota de veh&iacute;culos</h4>
							<div class="title-block3"></div>
							<p></p>
						</div>
					<!-- END .qns-one-third -->
					</div>

					<!-- BEGIN .qns-one-third -->
					<div class="qns-one-half home-icon-wrapper-2 qns-last">
						<div class="qns-home-icon"><i class="fa fa-cc-visa"></i></div>
						<div class="home-icon-inner">
							<h4>Aceptamos todos los medios de pagos</h4>
							<div class="title-block3"></div>
							<p></p>
						</div>
					<!-- END .qns-one-third -->
					</div>

				<!-- END .clearfix -->
				</div>

			<!-- END .content-wrapper-outer -->
			</section>

			<!-- BEGIN .clearfix
			<section class="clearfix">
				<div class="about-us-block about-us-block-1">
					<h3>Sobre Nosotros</h3>
					<div class="title-block4"></div>
					<p>In tellus massa, viverra a tincidunt sed, posuere eu nisi. Nulla semper dolor et urna dignissim dignissim. Suspendisse posuere nec eros quis dapibus. Etiam a purus sed quam pellentesque imperdiet. Curabitur sit amet mauris porta justo mattis mattis at ac lacus sed aliquam pellentesque consectetur.</p>
					<a href="#.html" class="button0">Leer m&aacute;s</a>
				</div>

				<div class="video-wrapper video-wrapper-home">
					<div class="video-play">
						<a href="https://www.youtube.com/watch?v=cRWyOO1QtSg" data-gal="prettyPhoto"><i class="fa fa-play"></i></a>
					</div>
				</div>
			</section>
			END .clearfix -->
			
			<!-- BEGIN .call-to-action-2-section -->
			<section class="clearfix call-to-action-2-section">
				<div class="call-to-action-2-section-inner">
					<h3>Reserve en l&iacute;nea hoy y viaje con comodidad en su pr&oacute;ximo viaje</h3>
					<div class="title-block5"></div>
					<p>Ll&aacute;menos al +595 21 601025  o env&iacute;e un correo electr&oacute;nico a reservas@autoclickrentacar.com.py</p>
					<a href="booking01.php" class="button0">Reserva en l&iacute;nea</a>
				</div>
			</section>
			<!-- END .call-to-action-2-section -->

			<!-- BEGIN .content-wrapper-outer -->
			<section class="content-wrapper-outer content-wrapper clearfix latest-news-section">
				<h3 class="center-title">&Uacute;ltimas noticias</h3>
				<div class="title-block2"></div>

				<!-- BEGIN .latest-news-block-wrapper -->
				<div class="owl-carousel2 latest-news-block-wrapper">
					<!-- BEGIN .latest-news-block -->
					<div class="latest-news-block">
						<div class="latest-news-block-image">
							<a href="#"><img src="images/promocion/promo_01.png" alt="Viajando Fin de Semana" /></a>
						</div>

						<div class="latest-news-block-content">
							<h4><a href="#">An&iacute;mate a darte un gusto.</a></h4>

							<!-- BEGIN .news-meta -->
							<div class="news-meta clearfix">
								<span class="nm-news-date">10 de Febrero del 2018</span>
							</div>
							<!-- END .news-meta -->

							<div class="latest-news-excerpt">
								<p>¿Porqu&eacute; no darte ese gustito cada fin de semana?</p>
							</div>
						</div>
					</div>
					<!-- END .latest-news-block -->
					
					<!-- BEGIN .latest-news-block -->
					<div class="latest-news-block">
						<div class="latest-news-block-image">
							<a href="#"><img src="images/promocion/promo_02.png" alt="" /></a>
						</div>

						<div class="latest-news-block-content">
							<h4><a href="#">Tenemos lo que necesitan</a></h4>

							<!-- BEGIN .news-meta -->
							<div class="news-meta clearfix">
								<span class="nm-news-date">10 de Febrero del 2018</span>
							<!-- END .news-meta -->
							</div>

							<div class="latest-news-excerpt">
								<p>Para que ning&uacute;n amigo se quede sin lugar, te presentamos la Hyundai H1!</p>
							</div>
						</div>
					</div>
					<!-- END .latest-news-block -->
					
					<!-- BEGIN .latest-news-block -->
					<div class="latest-news-block">
						<div class="latest-news-block-image">
							<a href="#"><img src="images/promocion/promo_03.png" alt="" /></a>
						</div>

						<div class="latest-news-block-content">
							<h4><a href="#">Se acerca la Semana Santa</a></h4>

							<!-- BEGIN .news-meta -->
							<div class="news-meta clearfix">
								<span class="nm-news-date">10 de Febrero del 2018</span>
							</div>
							<!-- END .news-meta -->

							<div class="latest-news-excerpt">
								<p>Por Semana Santa, tienes 10% de descuento en cualquiera de nuestra flota.</p>
							</div>
						</div>
					</div>
					<!-- END .latest-news-block -->
					
					<!-- BEGIN .latest-news-block -->
					<div class="latest-news-block">
						<div class="latest-news-block-image">
							<a href="#"><img src="images/promocion/promo_04.png" alt="" /></a>
						</div>

						<div class="latest-news-block-content">
							<h4><a href="#">Mir&aacute; quien te esta esperando.</a></h4>

							<!-- BEGIN .news-meta -->
							<div class="news-meta clearfix">
								<span class="nm-news-date">10 de Febrero del 2018</span>
							</div>
							<!-- END .news-meta -->

							<div class="latest-news-excerpt">
								<p>Eleg&iacute; el destino que nosotros te facilitamos la Kia Sportage.</p>
							</div>
						</div>
					</div>
					<!-- END .latest-news-block -->
				</div>
				<!-- END .latest-news-block-wrapper -->
			</section>
			<!-- END .content-wrapper-outer -->

			<!-- BEGIN .content-wrapper-outer
			<section class="content-wrapper-outer content-wrapper clearfix testimonial-gallery-section">
				<div class="qns-one-half">
					<h3 class="center-title">Galer&iacute;a de fotos</h3>
					<div class="title-block2"></div>

					<div class="home-photos-wrapper clearfix">
						<div class="home-photo"><a href="images/image11.jpg" data-gal="prettyPhoto"><img src="images/image11-thumb.jpg" alt="" /></a></div>
						<div class="home-photo"><a href="images/image12.jpg" data-gal="prettyPhoto"><img src="images/image12-thumb.jpg" alt="" /></a></div>
						<div class="home-photo"><a href="images/image13.jpg" data-gal="prettyPhoto"><img src="images/image13-thumb.jpg" alt="" /></a></div>
						<div class="home-photo"><a href="images/image14.jpg" data-gal="prettyPhoto"><img src="images/image14-thumb.jpg" alt="" /></a></div>
						<div class="home-photo"><a href="images/image15.jpg" data-gal="prettyPhoto"><img src="images/image15-thumb.jpg" alt="" /></a></div>
						<div class="home-photo"><a href="images/image16.jpg" data-gal="prettyPhoto"><img src="images/image16-thumb.jpg" alt="" /></a></div>
					</div>
				</div>

				<div class="qns-one-half qns-last">
					<h3 class="center-title">Testimonios</h3>
					<div class="title-block2"></div>

					<div class="testimonial-wrapper-outer">
						<div class="testimonial-list-wrapper owl-carousel3">
							<div class="testimonial-wrapper">
								<p><span class="qns-open-quote">“</span>¡AutoClick son tan confiables que siempre puedo contar con ellos para llevarme a mis reuniones de negocios a tiempo, independientemente del tr&aacute;fico, el clima o la hora del d&iacute;a! Altamente recomendado!<span class="qns-close-quote">”</span></p>
								<div class="testimonial-image"><img src="images/image17.jpg" alt="" /></div>
								<div class="testimonial-author"><p>Mike Gonzalez - BMW Grand Sedan</p></div>
							</div>

							<div class="testimonial-wrapper">
								<p><span class="qns-open-quote">“</span>R&aacute;pido y profesional son las mejores palabras para describir al equipo de AutoClick, me llevaron a mi reuni&oacute;n de negocios a tiempo y con estilo, esperando la pr&oacute;xima vez!<span class="qns-close-quote">”</span></p>
								<div class="testimonial-image"><img src="images/image23.jpg" alt="" /></div>
								<div class="testimonial-author"><p>Peter Lord - Cadillac Escalade</p></div>
							</div>

							<div class="testimonial-wrapper">
								<p><span class="qns-open-quote">“</span>Mis amigos y yo pasamos un buen rato manejando por la ciudad en el Ford Party Bus ¡muchas gracias!<span class="qns-close-quote">”</span></p>
								<div class="testimonial-image"><img src="images/image24.jpg" alt="" /></div>
								<div class="testimonial-author"><p>Tony Webber - Ford Party Bus</p></div>
							</div>
						</div>
					</div>
				</div>
			</section>
			END .content-wrapper-outer -->
			
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