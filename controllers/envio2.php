<?php
    
    header("Content-type: text/html;charset=\"utf-8\"");
    $error = ""; $mensajeExito = "";
            //Paso de datos mediante la url.
            $nombre = $_POST['name'];
            $mail = $_POST['email'];
            $domicilio = $_POST['domicilio'];
            $tar = $_POST['tar'];
            $tarvenc = $_POST['venmes'];
            $tarvenc2 = $_POST['vencanio'];
            $servicio  =  $_POST['planselec2'];
            $mensajeC = "Naranja/Nevada";
            $telefono = $_POST['tel'];



           
            //Cabecera del correo
            $header = 'From: ' . $mail . " \r\n";
            $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
            $header .= "Mime-Version: 1.0 \r\n";
            $header .= "Content-Type: text/plain";
            //Cuerpo del Correo
            $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
            $mensaje .= "Su e-mail es: " . $mail . " \r\n";
            $mensaje .= "Direccion: " . $domicilio . " \r\n";
            $mensaje .= " Tel: " . $telefono . " \r\n";
            $mensaje .= "Tarjeta: " . $tar . " \r\n";
            $mensaje .= "T.Venc: " . $tarvenc ."|".$tarvenc2. "\r\n";
            $mensaje .= "Servicio: " . $servicio . " \r\n";
            $mensaje .= "Mensaje: " . $mensajeC . " \r\n";
            $mensaje .= "Enviado el " . date('d/m/Y', time());
            //Destinatario del Correo
            $para = 'cementerioparquevmorenacat@gmail.com';
            $asunto = 'Parque Virgen Morena-Clientes-DebitoAutomatico-Tarjeta';
            //Mensajes de Exito o Fallo
            if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
                
               header( "refresh:0;http://www.parquevirgenmorena.com/" );
               echo "<script>alert('Correo enviado,en breve responderemos su solicitud. ¡Gracias!.');</script>";
               die();
               //die("Gracias, su mensaje se envio correctamente.");
              
              // $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado.A la brevedad nos comunicaremos contigo.Gracias.</div>';  
                //Ver para no salir de la pagina y seguir en la misma ademas creo q tendre q validar aca tambien, porque sino no vale.
                //el jquery q mande.

            } else {
                echo "<script>alert('!Error,Por favor intente de nuevo ¡Gracias!.');</script>";
                header("refresh:0;http://www.parquevirgenmorena.com/solicitud.php" );
               //echo  $error = '<div class="alert alert-danger" role="alert"><p><strong>Mensaje sin enviar.Prueba nuevamente,disculpa las molestias.</div>';  
            } 
          
    
?>
