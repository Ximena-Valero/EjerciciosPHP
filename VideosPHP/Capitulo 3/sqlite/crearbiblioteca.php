<?php

	$conexion = new PDO('sqlite:bibliotecacd.db') or die('Ha sido imposible establecer la conexion');


	$consulta ='
	

	CREATE TABLE Discos(

			artista Char(20) NOT NULL,
			disco char(40),
			anio Integer

		)';

$resultado = $conexion-> exec($consulta);


?>