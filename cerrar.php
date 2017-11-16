<?php 

session_start();

//terminamos la session

session_destroy();

// con esto limpiamos la session
$_SESSION = array();

header('Location: login.php');
//die para terminar pagina.


die();

?>