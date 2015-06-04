<?php

	echo date("c");
	echo "<br>";

	//segundos que han pasado
	echo date("U");
	echo "<br>";

	// si es am y pm
	echo "<h3>AM Y PM</h3>";
	echo date("a");
	echo "<br>";
	echo date("A");
	echo "<br>";

	//formato creado por suitch
	echo date("B");
	echo "<br>";
	//hora del dia
	echo date("g");
	echo "<br>";
	echo date("G");
	echo "<br>";
//hora del dia
	echo date("h");
	echo "<br>";
	echo date("H");
	echo "<br>";

//minutos con 0
	echo date("i");
	echo "<br>";

	//segundos con ceros
	echo date("s");
	echo "<br>";

	//microsegundos
	echo date("s");
	echo "<br>";

	//zona horaria
	echo date("e");
	echo "<br>";

	//horario ruso del sol
	echo date("I");
	echo "<br>";

	//diferencia del greenbeach
	echo date("O");
	echo "<br>";

	//horario ruso del sol
	echo date("I");
	echo "<br>";

	function tiempo(){
	echo "PAGINA WEB<br>";

	switch (date("l")) {
		case 'Monday':
			$dia= "Lunes";
			break;
		
		case 'Tuesday':
			$dia=  "Martes";
			break;

		case 'Wednesday':
			$dia=  "Miercoles";
			break;

		case 'Thursday':
			$dia=  "Jueves";
			break;

		case 'Friday':
			$dia=  "Viernes";
			break;

		case 'Saturday':
			$dia=  "Sabado";
			break;

		case 'Sunday':
			$dia=  "Domingo";
			break;
	}

	switch (date("F")) {
		case 'January':
			$mes = "Enero";
			break;
		
		case 'February':
			$mes = "Febrero";
			break;
		
		case 'March':
			$mes = "Marzo";
			break;
		
		case 'April':
			$mes = "Abril";
			break;
		
		case 'May':
			$mes = "Mayo";
			break;
		
		case 'June':
			$mes = "Junio";
			break;
		
		case 'July':
			$mes = "Julio";
			break;
		
		case 'August':
			$mes = "Agosto";
			break;
		
		case 'September':
			$mes = "Septiembre";
			break;
		
		case 'October':
			$mes = "Octubre";
			break;
		
		case 'November':
			$mes = "Noviembre";
			break;
		
		case 'December':
			$mes = "Diciembre";
			break;
		
	}
	//echo "Hoy es: ".date("l").", ".date("j")." de ".date("F")." de ".date("Y");
	//echo "ABREVIADO <br>";
	echo "Hoy es: ".$dia.", ".date("j")." de ".$mes." de ".date("Y");

}

tiempo();
?>