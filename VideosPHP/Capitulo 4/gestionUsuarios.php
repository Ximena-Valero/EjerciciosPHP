<?php

	session_start();

	echo "Tu usuario es: ".$_SESSION['usuario']."<br/>";
	echo "Tu contrasenia es: ".$_SESSION['contrasena'];

	//Crear conexion

	$conexion = new PDO('sqlite:favoritos.db') or die('Ha sido imposible establecer la conexion');

	//Establecer consulta

	$consulta = "SELECT * FROM usuario";


	$resultado = $conexion -> query($consulta);

	echo "
	<table border=1 width=1>
		<tr>
		   <td>Usuario</td>
		   <td>Contrase&ntilde;a</td>
		   <td>Nombre</td>
		   <td>Apellido</td>
		   <td>Edad</td>
		   <td></td>
		   <td></td>
		</tr>
	
	";



	foreach ( $resultado as $fila )	{

		echo "<tr><td>".$fila['usuario']."</td><td>".$fila['contrasena']."</td><td>".
		$fila['nombre']."</td><td>".$fila['apellido']."</td><td>".$fila['edad']."</td>

		<td><a href='eliminarUsuario.php?usuario=".$fila['usuario']."&contrasena=".$fila['contrasena'].
		"&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>Eliminar</a></td>

		<td><a href='formactualizarUsuario.php?usuario=".$fila['usuario']."&contrasena=".$fila['contrasena'].
		"&nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&edad=".$fila['edad']."'>Actualizar</a></td>
		</tr>";
	}

	//añadir registro

	echo "
		<tr>
			<form action='crearUsuario.php' method='POST'>
			<td><input type='text' name='usuario'></td>
			<td><input type='text' name='contrasena'></td>
			<td><input type='text' name='nombre'></td>
			<td><input type='text' name='apellido'></td>
			<td><input type='text' name='edad'></td>
			<td><input type='submit'></td><td></td>

		</tr>

	";


	echo "</table>";

	$conexion = NULL;

?>
