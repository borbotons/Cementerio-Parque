<?php session_start();

if (isset($_SESSION['usuario'])) {
	//Para que no vuelva a crear otro usario cuando esta en servicios.
	//header('Location: index.php');
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$usuario= filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password= $_POST['password'];
	$password2= $_POST['password2'];


	//echo '<h1>'.$usuario.'</h1>'.$password.$password2;

	$errores = '';

	if (empty($usuario) or empty($password) or empty($password2)) {
		$errores.= '<li>Por favor rellena todos los campos</li>';
	}
	else {

		try{
			$conexion = new PDO('mysql:host=localhost;dbname=morena','root','');


		}catch (PDOException $e){

			echo "Error: ". $e->getMessage();
		}

		$statement =$conexion->prepare('SELECT * FROM prueba WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		//comprobar si la consulta me devuelve error o el registro.
		$resultado=$statement->fetch();

		
		if($resultado != false){
			$errores .= '<li>El Nombre de usuario ya existe, Por favor ingresar otro</li>';
		}

		//aplicar un hash a la contraseña es para evitar el robo de contraseñas de manera facil en caso de contar con la BD.Y ademas no esta bien que yo tenga la contraseña ...aunque puede ser que si...ya lo veo...
		//investigar otras formas de seguridad para la contraseña o loguin aunq mejor enfocar en la contraseña.

		//sha512 es el algoritmo de encriptacion

		$password=hash('sha512', $password);

		$password2=hash('sha512', $password2);

	//echo '<h1>'.$usuario.'</h1>'.$password.$password2;

		if ($password != $password2) {


			$errores.= '<li>Las contraseñas no son iguales.</li>';
			}


	}


	if ($errores == '') {
		// no hay errores

		$statement = $conexion->prepare('INSERT INTO prueba (id_user,usuario,password) VALUES (null,:usuario,:pass )');

		$statement->execute(array(
			':usuario' => $usuario ,
			':pass' => $password));

		

		

		//header('Location: login.php');


		$statement =$conexion->prepare('SELECT * FROM prueba WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));

		$resultado=$statement->fetch();
		
		//print_r($resultado);

	//	echo 'Aca traigo el id usuario jajaj'.$resultado['id_user'].'para insertar en la otra consulta y vincular persona con socio';

	}
}


/*$nombre=$_POST['usuario'];

echo '<h1>'.$nombre.'</h1>';
esta forma es para enviar y trabajar solamente en esta pagina con los datos.

*/


require './solicitud.html';





?>