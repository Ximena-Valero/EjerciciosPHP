<?php 

echo "<table border=1> <tr> <td>Disco </td><td>Artistas</td><td>Anio</td></tr>";


$conexion= new PDO('sqlite:bibliotecacd.db') or die ("Error en la conexion");


	$consulta="SELECT * FROM Discos WHERE artista='queeen' ORDER BY anio DESC";

	$resultado = $conexion -> query($consulta);

	foreach ( $resultado as $fila )	{

		echo "<tr><td>".$fila['disco']."</td><td>".$fila['artista']."</td><td>".$fila['anio']."</td>";

	//echo $fila ['artistas']."".$fila['disco']."".$fila['anio']."<br>";
		}


	echo "</table>";
$conexion=NULL;



?>