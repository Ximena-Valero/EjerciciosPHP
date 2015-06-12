<?php

	session_start();

	//obtencion de variables

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	//conexion
	$conexion = new PDO('sqlite:favoritos.db');

	$consulta = "SELECT * FROM usuarios";

	$resultado = $conexion-> query($consulta);

	foreach ( $resultado as $fila )	{

		$user = $fila['usuario'];
		$password = $fila['contrasena'];
		$permisosbd = $fila['permisos'];


		if ($usuario==$user & $contrasena == $password) {
			
			$_SESSION['usuario']=$usuario;
			$_SESSION['contrasena']=$contrasena;
			$_SESSION['permisos']=$permisosbd;

		echo '
			<html>
	    <head>
	       <meta http-equiv="REFRESH" content="0;url=principal.php">
	    </head>
	</html>      
       ';

		}else{
				
		}
	}

?>