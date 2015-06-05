<?php

	session_start();

	//Crear variable 

	$usuario = $_SESSION['usuario'];
	$contrasena = $_SESSION['contrasena'];

	$addtitulo = $_POST['titulo'];
	$adddireccion = $_POST['direccion'];
	$addcategoria = $_POST['categoria'];
	$addcomentario = $_POST['comentario'];
	$addvaloracion = $_POST['valoracion'];

	//conexion

	$conexion = new PDO('sqlite:favoritos.db');

	//consulta

	$consulta=
		"INSERT INTO favoritos VALUES ('$usuario','$contrasena','$addtitulo','$adddireccion','$addcategoria','$addcomentario','$addvaloracion');

		";
	$resultado = $conexion -> exec ($consulta);

	$conexion=NULL;

	//Volver al formulario

	echo '

		<html>
			<head>
				<meta http-equiv="REFRESH" content="0;url=principal.php">
			</head>
		</html>	

	';

?>