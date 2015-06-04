<?php

	$archivo = "text.txt";
	$contenido = "Este es mi contenido";

	$manejador = fopen($archivo, 'w+');
	fwrite($manejador, $contenido);


?>