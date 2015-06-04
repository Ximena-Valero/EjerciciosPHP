<?php

	 $conexion = mysql_connect("localhost","Ximena","Cristian");

	  if (!$conexion) {
	 	 die(mysql_error());
	  }


	  mysql_select_db("agenda",$conexion);

	   $peticion = mysql_query("SELECT * FROM miagenda ORDER BY Edad DESC");


	  while ($fila = mysql_fetch_array($peticion)) {

	 	 echo $fila['Nombre'];
	 	 echo " ";
	 	 echo $fila['Apellido']; 
	 	 echo " ".$fila['Edad'];
	 	 echo " ";
	 	 echo $fila['Telefono'];
	 	 echo "<br>";

	 }

	mysql_close($conexion);
?>