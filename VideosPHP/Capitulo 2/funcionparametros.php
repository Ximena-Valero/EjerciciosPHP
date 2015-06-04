<?php

	//tabla multiplicar

function Tabla ($num){

	for ($multiplicador=0; $multiplicador < 10; $multiplicador++) { 
		
		echo $num." x ".$multiplicador." = ".$num * $multiplicador."<br>";
	}
}

//calculo de todas las tablas de multiplicar

	for ($x=0; $x<=10; $x++){
		echo "Tabla del ".$x.":<br>";

		Tabla($x);
	}

?>