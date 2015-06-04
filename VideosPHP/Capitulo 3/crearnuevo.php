<?php

	$conexion = mysql_connect("localhost","Ximena","Cristian");

	if (!$conexion) {

		die('No he podido conectar: '.mysql_error());
	}

	mysql_select_db("agenda",$conexion);

	mysql_query("INSERT INTO miagenda (Nombre, Apellido, Edad, Telefono) 
		VALUES ('Jimmy','Valero',23,'3103489323')");


//cerrar la conexion
 mysql_close($conexion);

?>