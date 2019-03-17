<?php
	function strLocal($val01) {
		$ret01 = '';
		switch ($val01){
			case 1:
				$ret01 = 'Asunci&oacute;n';
				break;
			case 2:
				$ret01 = 'Aeropuerto';
				break;
		}
		return $ret01;
	}

	function strHora($val01) {
		$ret01 = '';
		switch ($val01){
			case 1:
				$ret01 = '07:00';
				break;
			case 2:
				$ret01 = '07:30';
				break;
			case 3:
				$ret01 = '08:00';
				break;
			case 4:
				$ret01 = '08:30';
				break;
			case 5:
				$ret01 = '09:00';
				break;
			case 6:
				$ret01 = '09:30';
				break;
			case 7:
				$ret01 = '10:00';
				break;
			case 8:
				$ret01 = '10:30';
				break;
			case 9:
				$ret01 = '11:00';
				break;
			case 10:
				$ret01 = '11:30';
				break;
			case 11:
				$ret01 = '12:00';
				break;
			case 12:
				$ret01 = '12:30';
				break;
			case 13:
				$ret01 = '13:00';
				break;
			case 14:
				$ret01 = '13:30';
				break;
			case 15:
				$ret01 = '14:00';
				break;
			case 16:
				$ret01 = '14:30';
				break;
			case 17:
				$ret01 = '15:00';
				break;
			case 18:
				$ret01 = '15:30';
				break;
			case 19:
				$ret01 = '16:00';
				break;
			case 20:
				$ret01 = '16:30';
				break;
			case 21:
				$ret01 = '17:00';
				break;
			case 22:
				$ret01 = '17:30';
				break;
			case 23:
				$ret01 = '18:00';
				break;
			case 24:
				$ret01 = '18:30';
				break;
			case 25:
				$ret01 = '19:00';
				break;
			case 26:
				$ret01 = '19:30';
				break;
			case 27:
				$ret01 = '20:00';
				break;
			case 28:
				$ret01 = '20:30';
				break;
		}
		return $ret01;
	}

	function strVehiculo($val01) {
		$ret00 = array();
		switch ($val01){
			case '1':
				$ret01 = 'Kia Picanto o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '36.00';
				$ret05 = 'kia_picanto_2018.png';
				$ret06 = '100 Km';
				$ret07 = 'Un autom&oacute;vil peque&ntilde;o, completamente desarrollado. Conducir debe ser una extensi&oacute;n de usted mismo. Salude al nuevo Picanto. Deportivo y con estilo, adem&aacute;s cuenta con otras caracter&iacute;sticas esenciales: dise&ntilde;o novedoso, tecnolog&iacute;a ecol&oacute;gica, y por su puesto, ahora la individualidad del legendario Picanto.';
				$ret08 = '80.00';
				$ret09 = '100.00';
				$ret10 = 'kia_picanto_2018';
				break;
			case '2':
				$ret01 = 'Kia Picanto o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '80.00';
				$ret05 = 'kia_picanto_2018.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'Un autom&oacute;vil peque&ntilde;o, completamente desarrollado. Conducir debe ser una extensi&oacute;n de usted mismo. Salude al nuevo Picanto. Deportivo y con estilo, adem&aacute;s cuenta con otras caracter&iacute;sticas esenciales: dise&ntilde;o novedoso, tecnolog&iacute;a ecol&oacute;gica, y por su puesto, ahora la individualidad del legendario Picanto.';
				$ret08 = '36.00';
				$ret09 = '100.00';
				$ret10 = 'kia_picanto_2018';
				break;
			case '3':
				$ret01 = 'Toyota Etios o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '40.00';
				$ret05 = 'toyota_etios_2018.png';
				$ret06 = '100 Km';
				$ret07 = 'El Toyota Etios continua reforzando su actitud gracias a la incorporación de un nuevo diseño de parrilla, llantas de aleación y faros oscurecidos. Además, incorpora de serie Control de estabilidad y Control de tracción que en conjunto con su excelente performance de motor y transmisión hacen al Etios la opción ideal para recorrer el camino.';
				$ret08 = '90.00';
				$ret09 = '100.00';
				$ret10 = 'toyota_etios_2018';
				break;
			case '4':
				$ret01 = 'Toyota Etios o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '90.00';
				$ret05 = 'toyota_etios_2018.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'El Toyota Etios continua reforzando su actitud gracias a la incorporación de un nuevo diseño de parrilla, llantas de aleación y faros oscurecidos. Además, incorpora de serie Control de estabilidad y Control de tracción que en conjunto con su excelente performance de motor y transmisión hacen al Etios la opción ideal para recorrer el camino.';
				$ret08 = '40.00';
				$ret09 = '100.00';
				$ret10 = 'toyota_etios_2018';
				break;
			case '5':
				$ret01 = 'Suzuki Baleno o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '40.00';
				$ret05 = 'suzuki_baleno_2018.png';
				$ret06 = '100 Km';
				$ret07 = 'Desde el momento en que pongas tus ojos sobre en Baleno, sabrás que todo es diferente ahora. Una nueva y redefinida sensación que te atrapa y no te deja ir, un sentimiento de placer que cambio tu preconcepto de lo que un auto puede ser. Cuando subes a un Baleno, estás a la vanguardia de una emocionante vida. El Baleno combina una forma ancha de baja altura para un excelente estabilidad con un cuerpo conformado por fluidas curvas.';
				$ret08 = '90.00';
				$ret09 = '100.00';
				$ret10 = 'suzuki_baleno_2018';
				break;
			case '6':
				$ret01 = 'Suzuki Baleno o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '90.00';
				$ret05 = 'suzuki_baleno_2018.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'Desde el momento en que pongas tus ojos sobre en Baleno, sabrás que todo es diferente ahora. Una nueva y redefinida sensación que te atrapa y no te deja ir, un sentimiento de placer que cambio tu preconcepto de lo que un auto puede ser. Cuando subes a un Baleno, estás a la vanguardia de una emocionante vida. El Baleno combina una forma ancha de baja altura para un excelente estabilidad con un cuerpo conformado por fluidas curvas.';
				$ret08 = '40.00';
				$ret09 = '100.00';
				$ret10 = 'suzuki_baleno_2018';
				break;
			case '7':
				$ret01 = 'Kia Rio Sedan o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '44.00';
				$ret05 = 'kia_rio_2018.png';
				$ret06 = '100 Km';
				$ret07 = 'Prep&aacute;rese para la emoci&oacute;n. Con nueva apariencia, mayor espacio interior y rendimiento din&aacute;mico, el All New Kia Rio tiene encanto que se intensifica cuando usted se pone detr&aacute;s del volante. Es m&aacute;s que un auto para la ciudad, es un compa&ntilde;ero de viaje de todos los d&iacute;as.';
				$ret08 = '101.00';
				$ret09 = '100.00';
				$ret10 = 'kia_rio_2018';
				break;
			case '8':
				$ret01 = 'Kia Rio Sedan o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '101.00';
				$ret05 = 'kia_rio_2018.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'Prep&aacute;rese para la emoci&oacute;n. Con nueva apariencia, mayor espacio interior y rendimiento din&aacute;mico, el All New Kia Rio tiene encanto que se intensifica cuando usted se pone detr&aacute;s del volante. Es m&aacute;s que un auto para la ciudad, es un compa&ntilde;ero de viaje de todos los d&iacute;as.';
				$ret08 = '44.00';
				$ret09 = '100.00';
				$ret10 = 'kia_rio_2018';
				break;
			case '9':
				$ret01 = 'Kia Cerato o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '66.00';
				$ret05 = 'kia_cerato_2018.png';
				$ret06 = '100 Km';
				$ret07 = 'Tal vez usted nunca pens&oacute; que la innovaci&oacute;n, la excelencia tecnol&oacute;gica y un estilo excepcional pudieran venir juntos en un autom&oacute;vil asequible. Finalmente han llegado. Deje que el nuevo Cerato lo lleve a lugares que usted s&oacute;lo hab&iacute;a imaginado.';
				$ret08 = '140.00';
				$ret09 = '500.00';
				$ret10 = 'kia_cerato_2018';
				break;
			case '10':
				$ret01 = 'Kia Cerato o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '140.00';
				$ret05 = 'kia_cerato_2018.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'Tal vez usted nunca pens&oacute; que la innovaci&oacute;n, la excelencia tecnol&oacute;gica y un estilo excepcional pudieran venir juntos en un autom&oacute;vil asequible. Finalmente han llegado. Deje que el nuevo Cerato lo lleve a lugares que usted s&oacute;lo hab&iacute;a imaginado.';
				$ret08 = '66.00';
				$ret09 = '500.00';
				$ret10 = 'kia_cerato_2018';
				break;
			case '11':
				$ret01 = 'Toyota Corolla 2018 o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '66.00';
				$ret05 = 'toyota_corolla_2018.png';
				$ret06 = '100 Km';
				$ret07 = 'Un dise&ntilde;o aerodin&aacute;mico con detalles novedosos y elegantes integrados al color de la carrocer&iacute;a, faros con apagado autom&aacute;tico y parabrisas tintado. Carrocer&iacute;a con dise&ntilde;o deportivo e imponente integrada al color del auto, faros de niebla, rines de acero con dise&ntilde;o sport y luces direccionales en los espejos.';
				$ret08 = '165.00';
				$ret09 = '500.00';
				$ret10 = 'toyota_corolla_2018';
				break;
			case '12':
				$ret01 = 'Toyota Corolla 2018 o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '165.00';
				$ret05 = 'toyota_corolla_2018.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'Un dise&ntilde;o aerodin&aacute;mico con detalles novedosos y elegantes integrados al color de la carrocer&iacute;a, faros con apagado autom&aacute;tico y parabrisas tintado. Carrocer&iacute;a con dise&ntilde;o deportivo e imponente integrada al color del auto, faros de niebla, rines de acero con dise&ntilde;o sport y luces direccionales en los espejos.';
				$ret08 = '66.00';
				$ret09 = '500.00';
				$ret10 = 'toyota_corolla_2018';
				break;
			case '13':
				$ret01 = 'Kia Sportage o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '76.00';
				$ret05 = 'kia_sportage_2018.png';
				$ret06 = '100 Km';
				$ret07 = 'Lleve la experiencia de conducci&oacute;n a un nuevo nivel de emoci&oacute;n gracias a la apariencia original y llamativa del totalmente nuevo Sportage, con el uso innovador de la tecnolog&iacute;a y excepcional atenci&oacute;n en los detalles. All-New Sportage Born to Dare';
				$ret08 = '190.00';
				$ret09 = '500.00';
				$ret10 = 'kia_sportage_2018';
				break;
			case '14':
				$ret01 = 'Kia Sportage o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '190.00';
				$ret05 = 'kia_sportage_2018.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'Lleve la experiencia de conducci&oacute;n a un nuevo nivel de emoci&oacute;n gracias a la apariencia original y llamativa del totalmente nuevo Sportage, con el uso innovador de la tecnolog&iacute;a y excepcional atenci&oacute;n en los detalles. All-New Sportage Born to Dare';
				$ret08 = '76.00';
				$ret09 = '500.00';
				$ret10 = 'kia_sportage_2018';
				break;
			case '15':
				$ret01 = 'Hyundai H1 o Similar';
				$ret02 = '12';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '100.00';
				$ret05 = 'hyundai_h1_2018.png';
				$ret06 = '100 Km';
				$ret07 = 'El Minibus H1 ha obtenido los m&aacute;s altos galardones en todo el mundo, en la categor&iacute;a de auto de pasajeros. Es un veh&iacute;culo especialmente funcional y flexible. Apto para todas las necesidades y exigencias del trasporte de pasajeros y dise&ntilde;ado con altos est&aacute;ndares de comodidad.';
				$ret08 = '210.00';
				$ret09 = '500.00';
				$ret10 = 'hyundai_h1_2018';
				break;
			case '16':
				$ret01 = 'Hyundai H1 o Similar';
				$ret02 = '12';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '210.00';
				$ret05 = 'hyundai_h1_2018.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'El Minibus H1 ha obtenido los m&aacute;s altos galardones en todo el mundo, en la categor&iacute;a de auto de pasajeros. Es un veh&iacute;culo especialmente funcional y flexible. Apto para todas las necesidades y exigencias del trasporte de pasajeros y dise&ntilde;ado con altos est&aacute;ndares de comodidad.';
				$ret08 = '100.00';
				$ret09 = '500.00';
				$ret10 = 'hyundai_h1_2018';
				break;
			case '17':
				$ret01 = 'Toyota Fortuner o Similar';
				$ret02 = '7';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '110.00';
				$ret05 = 'toyota_fortuner_2019.png';
				$ret06 = '100 Km';
				$ret07 = 'El Fortuner viene completamente renovado por dentro y por fuera. Su exclusividad ahora viene acompa&ntilde;ada de m&aacute;s comodidad, m&aacute;s espacio y m&aacute;s extras. Definitivamente Fortuner lo tiene todo, por algo es Toyota.';
				$ret08 = '230.00';
				$ret09 = '500.00';
				$ret10 = 'toyota_fortuner_2019';
				break;
			case '18':
				$ret01 = 'Toyota Fortuner o Similar';
				$ret02 = '7';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '230.00';
				$ret05 = 'toyota_fortuner_2019.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'El Fortuner viene completamente renovado por dentro y por fuera. Su exclusividad ahora viene acompa&ntilde;ada de m&aacute;s comodidad, m&aacute;s espacio y m&aacute;s extras. Definitivamente Fortuner lo tiene todo, por algo es Toyota.';
				$ret08 = '110.00';
				$ret09 = '500.00';
				$ret10 = 'toyota_fortuner_2019';
				break;
			case '19':
				$ret01 = 'Chevrolet S10 LTZ o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '110.00';
				$ret05 = 'chevrolet_s10_2018.png';
				$ret06 = '100 Km';
				$ret07 = 'La Chevrolet S10 Cabina Doble est&aacute; lista para el desaf&iacute;o de complacer el estilo y la fuerza. Con un dise&ntilde;o completamente nuevo y lleno de &iacute;tems de confort, es ideal para aquellos que buscan sofisticaci&oacute;n.';
				$ret08 = '230.00';
				$ret09 = '500.00';
				$ret10 = 'chevrolet_s10_2018';
				break;
			case '20':
				$ret01 = 'Chevrolet S10 LTZ o Similar';
				$ret02 = '5';
				$ret03 = 'Autom&aacute;tico';
				$ret04 = '230.00';
				$ret05 = 'chevrolet_s10_2018.png';
				$ret06 = 'Km Ilimitado';
				$ret07 = 'La Chevrolet S10 Cabina Doble est&aacute; lista para el desaf&iacute;o de complacer el estilo y la fuerza. Con un dise&ntilde;o completamente nuevo y lleno de &iacute;tems de confort, es ideal para aquellos que buscan sofisticaci&oacute;n.';
				$ret08 = '110.00';
				$ret09 = '500.00';
				$ret10 = 'chevrolet_s10_2018';
				break;
		}
		
		$ret00[0] = $ret01;
		$ret00[1] = $ret02;
		$ret00[2] = $ret03;
		$ret00[3] = $ret04;
		$ret00[4] = $ret05;
		$ret00[5] = $ret06;
		$ret00[6] = $ret07;
		$ret00[7] = $ret08;
		$ret00[8] = $ret09;
		$ret00[9] = $ret10;
		return $ret00;
	}

	function strDocumento($val01) {
		$ret01 = '';
		switch ($val01){
			case 1:
				$ret01 = 'C.I.N.';
				break;
			case 2:
				$ret01 = 'D.N.I.';
				break;
			case 3:
				$ret01 = 'Pasaporte';
				break;
		}
		return $ret01;
	}

	function dateCantidad($dat1, $dat2){
		$dat1	= str_replace('/', '-', $dat1);
		$dat2	= str_replace('/', '-', $dat2);
    	$fecha1	= date_create($dat1);
    	$fecha2	= date_create($dat2);
    	$cant	= date_diff($fecha1, $fecha2);
    	return $cant->format('%a');
	}
?>