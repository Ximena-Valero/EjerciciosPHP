<?php

	session_start();

	$conexion = new PDO('sqlite:favoritos.db');
	
	$usuario = $_SESSION['usuario'];
	$contrasena = $_SESSION['contrasena'];

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];


	$usuarioantiguo = $_SESSION['usuario'];

	$consulta = 
	"UPDATE usuario SET 
	usuario='".$usuario."', 
	contrasena='".$contrasena."', 
	nombre='".$nombre."', 
	apellido='".$apellido."', 
	edad='".$edad."'
	WHERE usuario='".$usuarioantiguo."'";

	$resultado = $conexion -> query($consulta);

$conexion=NULL;	

echo '

		<html>
			<head>
				<meta http-equiv="REFRESH" content="0;url=gestionUsuarios.php">
			</head>
		</html>	

	';

?>