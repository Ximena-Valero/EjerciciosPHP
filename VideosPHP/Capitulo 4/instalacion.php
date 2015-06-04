<?php

	//conexion

	$conexion = new PDO('sqlite:favoritos.db') or die('Ha sido imposible establecer la conexion');
	
	//crear tabla

	$consulta ='
	CREATE TABLE favoritos(

			usuario Char(40) NOT NULL,
			contrasena Char(40) NOT NULL,
			titulo Char(40) NOT NULL,
			direccion Char(100) NOT NULL,
			categoria Char(40),
			comentario Char (200),
			valoracion Int

		)';

	//insertar contenido en una tabla
	    $resultado = $conexion-> exec($consulta);

	//cerrar conexion

	    $conexion = NULL;

	//CONTENIDO DE PRUEBA PARA LA TABLA FAVORITOS
	//Establecer

	    $conexion = new PDO('sqlite:favoritos.db') or die('Ha sido imposible establecer la conexion');

	//Preparar

         $consulta  =
			"INSERT INTO favoritos VALUES ('ximena','andres','Google','http://www.google.com','Tecnologia','Buscador famoso',10);
		     INSERT INTO favoritos VALUES ('ximena','andres',YouTube,'http://www.youtube.com','Tecnologia','Pagina de Musica',10);
			";
	//insertar
			$resultado = $conexion -> exec ($consulta);

	//cerrar

			$conexion = NULL;


		//CREAR UNA TABLA DE USUARIOS

		//CONEXION
			$conexion = new PDO('sqlite:favoritos.db') or die('Ha sido imposible establecer la conexion');

		//crear tabla

			$consulta ='
				CREATE TABLE usuario(

				usuario Char(40) NOT NULL,
				contrasena Char(40) NOT NULL,
				nombre Char(40) NOT NULL,
				apellido Char(100) NOT NULL,
				edad Int,
				permisos Int
			)';

		$resultado = $conexion -> exec($consulta);
		$conexion=NULL;

//CONTENIDO DE PRUEBA PARA LA TABLA USUARIOS
	//Establecer

	    $conexion = new PDO('sqlite:favoritos.db') or die('Ha sido imposible establecer la conexion');

	//Preparar

         $consulta  =
			"INSERT INTO usuario VALUES ('ximena','andres','Ximena','Valero',18,1);
		    ";
	//insertar
			$resultado = $conexion -> exec ($consulta);

	//cerrar

			$conexion = NULL;



		//CREAR UNA TABLA DE LOGS

		//CONEXION
			$conexion = new PDO('sqlite:favoritos.db') or die('Ha sido imposible establecer la conexion');

		//crear tabla

			$consulta ='
				CREATE TABLE logs(

				utc Int,
				anio INT,
				mes Int,
				dia INT,
				hora Int,
				minuto INT,
				segundo Int,
				ip Char(50),
				navegador Char(100),
				usuario Char(40),
				contrasena Char(40),
				
			)';

		$resultado = $conexion -> exec($consulta);
		$conexion=NULL;

//CONTENIDO DE PRUEBA PARA LA TABLA USUARIOS
	//Establecer

	    $conexion = new PDO('sqlite:favoritos.db') or die('Ha sido imposible establecer la conexion');

	//Preparar

         $consulta  =
			"INSERT INTO logs VALUES (000000000,2015,05,04,08,09,00,'127.0.0.1','chrome','ximena','andres');
		    ";
	//insertar
			$resultado = $conexion -> exec ($consulta);

	//cerrar

			$conexion = NULL;



?>	

