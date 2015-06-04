<?php

	$conexion = new PDO('sqlite:bibliotecacd.db');

	$consulta = "DELETE FROM Discos WHERE artista = 'queen'";

	$resultado = $conexion->query($consulta);

	foreach ( $resultado as $fila )	{

		echo "<tr><td>".$fila['disco']."</td><td>".$fila['artista']."</td><td>".$fila['anio']."</td>";

	}


   $conexion=NULL;

?>