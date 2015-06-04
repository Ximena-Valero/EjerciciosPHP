<?php
	//conexion
	 $conexion = mysql_connect("localhost","Ximena","Cristian");

	//comprobar conexion
	 if (!$conexion) {
	 	die('No he podido conectar: '.mysql_error());
	 }

	//seleccion de la bd
	 mysql_select_db("agenda",$conexion);

	 //realizo la peticion
	 $peticion = mysql_query("SELECT * FROM miagenda WHERE Nombre='Cristian'");

//listos los elementos de la base de datos

while ($fila = mysql_fetch_array($peticion)) {

	echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
	echo "<br>";

}
//cerrar la conexion
mysql_close($conexion);
?>