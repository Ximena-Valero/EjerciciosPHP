<?php

	$conexion = mysql_connect("localhost","Ximena","Cristian");

	mysql_select_db("agenda",$conexion);

	mysql_query("DELETE FROM miagenda WHERE Nombre = 'Jimmy' AND Apellido = 'Valero'");


//cerrar la conexion
 mysql_close($conexion);

?>