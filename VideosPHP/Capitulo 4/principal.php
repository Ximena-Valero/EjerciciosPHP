<?php
	
	include("log.php");

	echo "Tu usuario es: ".$_SESSION['usuario']."<br/>";
	echo "Tu contrasenia es: ".$_SESSION['contrasena'];

	echo "<br><br>Pulsa <a href='unlog.php'>Aqui</a> para cerrar tu sesion<br>";

	//Crear conexion

	$conexion = new PDO('sqlite:favoritos.db') or die('Ha sido imposible establecer la conexion');

	//Establecer consulta

	$consulta = "SELECT * FROM favoritos 
	WHERE usuario='".$_SESSION['usuario']."' 
	AND contrasena='".$_SESSION['contrasena']."'";


	$resultado = $conexion -> query($consulta);

	echo "
	<table border=1 width=1>
		<tr>
		   <td>Titulo</td>
		   <td>Direccion</td>
		   <td>Categoria</td>
		   <td>Comentario</td>
		   <td>Valoracion</td>
		   <td></td>
		   <td></td>
		</tr>
	
	";



	foreach ( $resultado as $fila )	{

		echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".
		$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td>

		<td><a href='eliminarfavorito.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion'].
		"&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".
		$fila['valoracion']."'>Eliminar</a></td>

		<td><a href='formactualizarfavorito.php?titulo=".$fila['titulo']."&direccion=".$fila['direccion'].
		"&categoria=".$fila['categoria']."&comentario=".$fila['comentario']."&valoracion=".
		$fila['valoracion']."'>Actualizar</a></td>
		</tr>";
	}

	//añadir registro

	echo "
		<tr>
			<form action='crearfavorito.php' method='POST'>
			<td><input type='text' name='titulo'></td>
			<td><input type='text' name='direccion'></td>
			<td><select name='categoria'>
				<option value='salud'>Salud</option>
				<option value='trabajo'>Trabajo</option>
				<option value='hobby'>Hobby</option>
				<option value='personal'>Personal</option>
				<option value='otros'>Otros</option>
			</td>
			<td><input type='text' name='comentario'></td>
			<td><input type='text' name='valoracion'></td>
			<td><input type='submit'></td><td></td>

		</tr>

	";


	echo "</table>";

	$conexion = NULL;


////////////Socializo////////////////////////////////////////////////////////////////////////
function verCategoria($dameCategoria){

	echo "<br/>";

	echo "Algunos Links de la categoria ".$dameCategoria." que quizas te puedan interesar <br/><br/>";

	$conexion = new PDO('sqlite:favoritos.db');

	$consulta = "SELECT * FROM favoritos WHERE usuario != '"
	.$_SESSION['usuario']."' AND categoria='".$dameCategoria."' ORDER BY RANDOM() LIMIT 3";

	$resultado = $conexion-> query($consulta);

	echo "
	<table border=1 width=1>
		<tr>
		   <td>Titulo</td>
		   <td>Direccion</td>
		   <td>Categoria</td>
		   <td>Comentario</td>
		   <td>Valoracion</td>
		 </tr>
	
	";

	foreach ( $resultado as $fila )	{

		echo "<tr><td>".$fila['titulo']."</td><td>".$fila['direccion']."</td><td>".
		$fila['categoria']."</td><td>".$fila['comentario']."</td><td>".$fila['valoracion']."</td></tr>";
	}

	echo "</table>";
	$conexion = NULL;

}


verCategoria("salud");
verCategoria("trabajo");
verCategoria("hobby");
verCategoria("personal");
verCategoria("otros");
	
?>
