<?php

	$conexion = new PDO('sqlite:bibliotecacd.db');

	$consulta = "UPDATE Discos SET artista = 'queen' WHERE artista = 'queeen'";

	$resultado = $conexion->query($consulta);

	foreach ( $resultado as $fila )	{

		echo "<tr><td>".$fila['disco']."</td><td>".$fila['artista']."</td><td>".$fila['anio']."</td>";

		}

   $conexion=NULL;

?>