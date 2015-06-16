<html>
	<body>
		<table border=1 width=100%>
		    <tr>
		      <td>
			<form action="login.php" method="post">
				<input type="text" name="usuario" value="introduce aqui tu nombre" width=50%>
				</td>
			</tr>
			<tr>
		      <td>
				<input type="text" name="contrasena" value="introduce aqui tu contrase&ntilde;a" width=50%>
			  </td>
			</tr>
			<tr>
		      <td>
				<input type="submit">
			  </td>
			</tr>
			</form>
	    </table>

	    No eres usuario todavia? Pues pulsa <a href="formUsuario.html">Aqui</a>

	</body>
</html>
<?php
echo "<br/>";

	echo "Algunos Links de la categoria que quizas te puedan interesar <br/><br/>";

	$conexion = new PDO('sqlite:favoritos.db');

	$consulta = "SELECT * FROM favoritos ORDER BY RANDOM() LIMIT 3";

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

?>