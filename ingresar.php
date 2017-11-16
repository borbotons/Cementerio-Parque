<?php

session_start();
//para no hacer el copia y pegue cada rato podemos pasar esto y otro mas a un archivo llamado "funciones.php"
//con las funciones como fuction comprobar_usuario(){ if (isset($_SESSION['usuario'])){header('location:index.php')}}
if (isset($_SESSION['usuario'])) {
	

	//si tiene session activa aca podemos mandar al inicio o al dashboard
	//print_r($_SESSION);
	

	
	//header('location:main.html');
}

$errores = '';

//para comprobar que enviemos informacion.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario = filter_var( strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);


try
{

$conexion = new PDO('mysql:host=localhost;dbname=morena','root','');

}catch(PDOException $e){

	echo "Error:" . $e->getMessage();
}

$statement= $conexion->prepare('
	SELECT * FROM prueba WHERE usuario = :usuario AND password = :password LIMIT 1'
);

$statement->execute(array(
':usuario' => $usuario,
':password' => $password

));

$resultado = $statement->fetch();

if ( $resultado != false) {

	$_SESSION ['usuario'] = $usuario ;
	header('Location:servicios.html');

	
} else{

	$errores.= '<li>El usuario y/o la contraseña son incorrectos</li>';

}




}

//require funciones.php
//fuction comprobar_usuario();
//De esta manera seria la mejor.
//require './ingresar.html';


require'./ingresar.html';





?>