<?php

	session_start();

	$contador = 0;

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];


	//comprobar si el usuario existe

	$conexion = new PDO('sqlite:favoritos.db');

	$consulta = "SELECT * FROM usuarios";

	$resultado = $conexion-> query($consulta);

	foreach ( $resultado as $fila )	{

		if ($fila['usuario'] == $usuario) {
			
			$contador++;

		}else{

		}
	}

	$conexion=NULL;

	//registro de usuarios
if ($contador == 0) {

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
}else{

	echo "El nombre de usuario ya existe";
}
	


?>