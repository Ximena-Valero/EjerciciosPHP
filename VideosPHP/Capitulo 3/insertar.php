<?php

	$conexion = mysql_connect("localhost","Ximena","Cristian");

	if (!$conexion) {

		die('No he podido conectar: '.mysql_error());
	}

	mysql_select_db("agenda",$conexion);

	mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono) 
		VALUES ('Diana','Parra',18,'3292043324')");
	mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono) 
		VALUES ('Cristian','Gomez',10,'3204932819')");
//cerrar la conexion
mysql_close($conexion);
?>