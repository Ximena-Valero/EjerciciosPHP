<?php

	$conexion = mysql_connect("localhost","Ximena","Cristian");

	mysql_select_db("agenda",$conexion);

	mysql_query("UPDATE miagenda SET Edad = '26' WHERE Nombre = 'Jimmy' AND Apellido = 'Valero'");


//cerrar la conexion
 mysql_close($conexion);

?>