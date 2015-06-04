<?php

$conexion = mysql_connect("localhost","Ximena","Cristian");

if (!$conexion) {

	die('No he podido conectar: '.mysql_error());

}

//SE CREA LA BD

if (mysql_query("CREATE DATABASE agenda",$conexion)) {
	echo "Se ha creado la base de datos";
}else{
	echo "No se ha podido crear la base de datos por el siguiente error: ".mysql_error();
}



//PREPARO ESTA PETICION

mysql_select_db("agenda",$conexion);
$sql = "CREATE TABLE miagenda
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int
)";


//EJECUTO LA PETICION

mysql_query($sql,$conexion);

//cerrar la conexion
mysql_close($conexion);

?>