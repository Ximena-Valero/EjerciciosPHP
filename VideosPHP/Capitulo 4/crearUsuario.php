<?php

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];

	$conexion = new PDO('sqlite:favoritos.db');

	//consulta
	/*
	PRIVILEGIOS
		1=Administrador
		2=Controlador
		3=Usuario Registrado
		4=Usuario Invitado
	*/



	$consulta=
		"INSERT INTO usuario VALUES ('$usuario','$contrasena','$nombre','$apellido','$edad',3);

		";
	$resultado = $conexion -> exec ($consulta);

	$conexion=NULL;

	echo '

		<html>
			<head>
				<meta http-equiv="REFRESH" content="0;url=gestionUsuarios.php">
			</head>
		</html>	

	';


?>