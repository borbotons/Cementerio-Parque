<?php 


//$var = $_POST['botonmerc'];
$var =$_POST['hos'];

//header( "refresh:0;http://mpago.la/HVrz" );
//echo "<script>alert('Correo enviado, ¡Gracias!.');</script>";
//die();


header("Content-type: text/html;charset=\"utf-8\"");
$error = ""; $mensajeExito = "";
		//Paso de datos mediante la url.
		$nombre = $_POST['name'];
		$domicilio = $_POST['domicilio'];
		$telefono = $_POST['tel'];
		$servicio  =  $_POST['planselec'];
		$mensajeC = "Solicitud de Alta a través de Mercado Pago.";
		



	   
		//Cabecera del correo
		$header = 'From: ' . $mail . " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";
		//Cuerpo del Correo
		$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
		$mensaje .= "Direccion: " . $domicilio . " \r\n";
		$mensaje .= " Tel: " . $telefono . " \r\n";
		$mensaje .= "Servicio: " . $servicio . " \r\n";
		$mensaje .= "Mensaje: " . $mensajeC . " \r\n";
		$mensaje .= "Enviado el " . date('d/m/Y', time());
		//Destinatario del Correo
		$para = 'cementerioparquevmorenacat@gmail.com';
		$asunto = 'Parque Virgen Morena-Clientes-DebitoAutomatico-MercadoPago';
		//Mensajes de Exito o Fallo
		if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
			
		   header( "refresh:0";hos );
		   die();
		   //die("Gracias, su mensaje se envio correctamente.");
		  
		  // $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado.A la brevedad nos comunicaremos contigo.Gracias.</div>';  
			//Ver para no salir de la pagina y seguir en la misma ademas creo q tendre q validar aca tambien, porque sino no vale.
			//el jquery q mande.

		} else {
			echo "<script>alert('!Error,Por favor intente de nuevo ¡Gracias!.');</script>";
			header("refresh:0;http://www.parquevirgenmorena.com/solicitud.php" )
		   //echo  $error = '<div class="alert alert-danger" role="alert"><p><strong>Mensaje sin enviar.Prueba nuevamente,disculpa las molestias.</div>';  
		} 
	  






?>