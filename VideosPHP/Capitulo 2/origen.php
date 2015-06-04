<?php
 session_start();
	$x="Hola";
	$_SESSION['a'] = "Adios";
	echo $x;

	echo "<a href='destino.php'>Voy al destino</a>";

?>