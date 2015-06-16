<?php
	session_start();
	require_once("install.php");
	if (!empty($_REQUEST['action'])){
		$accion = $_REQUEST['action'];
		if($accion == 'crear'){
			crearAutomovil();
		}else if ($accion == 'ver'){
			verAutomovil();
		}else if ($accion == 'update'){
			updateAutomovil();
		}else if ($accion == 'delete'){
			deleteAutomovil();
		}

	}

	function crearAutomovil(){
		/* Proteccion de Datos */
		$params = array(
			':marca' => $_POST['marca'],
			':modelo' => $_POST['modelo'],
			':color' => $_POST['color'],
			':placa' => $_POST['placa'],
			':estado' => $_POST['estado'],
		);

		/* Preparamos el query apartir del array $params*/
		$query = 'INSERT INTO Automoviles 
					(Marca, Modelo, Color, Placa, Estado) 
				VALUES 
					(:marca,:modelo,:color,:placa,:estado)';

		/* Ejecutamos el query con los parametros */
		$result = excuteQuery("Automoviles","", $query, $params);
		if ($result > 0){
			header('Location: viewUsers.php?result=true');
		}else{
			//header('Location: addUser.php?result=false');
		}
	}

	function verUsuarios (){
		$query = "SELECT * FROM Usuarios";
		$result = newQuery("Usuarios", "", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				echo "<tr>";
				echo "    <td>".$value['idUsuario']."</td>";
				echo "    <td>".$value['Nombres']."</td>";
				echo "    <td>".$value['Apellidos']."</td>";
				echo "    <td>".$value['Direccion']."</td>";
				echo "    <td>".$value['Telefono']."</td>";
				echo "    <td>".$value['Estado']."</td>";
				echo "</tr>";
			}
		}else{
			echo "No se encontraron resultados";
		}
	}

	function getUser($id){
		$query = "SELECT * FROM Usuarios WHERE idUsuario = '".$id."'";
		$result = newQuery("Usuarios", "", $query);
		if ($result != false || $result > 0){
			foreach ($result as $value) {
				return $value;
			}
		}else{
			return false;
		}
	}

	function updateUser (){

		/* Proteccion de Datos */
		$params = array(
			':idUser' => $_SESSION['idUser'],
			':nombres' => $_POST['nombres'],
			':apellidos' => $_POST['apellidos'],
			':direccion' => $_POST['direccion'],
			':telefono' => $_POST['telefono'],
			':estado' => $_POST['estado'],
		);

		/* Preparamos el query apartir del array $params*/
		$query ='UPDATE Usuarios SET
					Nombres = :nombres,
					Apellidos = :apellidos,
					Direccion = :direccion,
					Telefono = :telefono,
					Estado = :estado  
				 WHERE idUsuario = :idUser;
				';

		$result = excuteQuery("Usuarios", "", $query, $params);
		if ($result > 0){
			unset($_SESSION['idUser']);
			$_SESSION['idUser'] = NULL;
			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: editUser.php?result=false');
		}
	}

	function deleteUser (){

		$idUser = $_GET['id'];

		/* Proteccion de Datos */
		$params = array(
			':id' => $_GET['id'],
		);

		/* Preparamos el query apartir del array $params*/
		$query ='DELETE FROM Usuarios
				 WHERE idUsuario = :id;';

		$result = excuteQuery("Usuarios", "", $query, $params);
		if ($result > 0){
			header('Location: viewUsers.php?result=true');
		}else{
			header('Location: viewUser.php?result=false');
		}
	}

?>