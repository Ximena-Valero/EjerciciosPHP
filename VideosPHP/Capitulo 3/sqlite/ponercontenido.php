<?php

$conexion= new PDO('sqlite:bibliotecacd.db');

$consultar =
"INSERT INTO Discos ('artista','disco','anio') VALUES ('queeen','queen',1997);
 INSERT INTO Discos ('artista','disco','anio') VALUES ('queeen','queenII',1987);
 INSERT INTO Discos ('artista','disco','anio') VALUES ('h2','boy',1887);

";

$resultado = $conexion-> exec($consultar);


$conexion=NULL;
?>