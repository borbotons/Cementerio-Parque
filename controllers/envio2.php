<?php
    //Mandar correo a travez del hosting+version estandar.
    header("Content-type: text/html;charset=\"utf-8\"");
    $error = ""; $mensajeExito = "";
            //Paso de datos mediante la url.
            $nombre = $_POST['name'];
            $mail = $_POST['email'];
            $domicilio = $_POST['domicilio'];
            $tar = $_POST['tar'];
            $tarvenc = $_POST['tarvenc'];
            $servicio  =  $_POST['planselec'];
            $mensajeC = "Naranja/Nevada";



           
            //Cabecera del correo
            $header = 'From: ' . $mail . " \r\n";
            $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
            $header .= "Mime-Version: 1.0 \r\n";
            $header .= "Content-Type: text/plain";
            //Cuerpo del Correo
            $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
            $mensaje .= "Su e-mail es: " . $mail . " \r\n";
            $mensaje .= " Direccion: " . $domicilio . " \r\n";
            $mensaje .= "Tarjeta: " . $tar . " \r\n";
            $mensaje .= "T.Venc: " . $tarvenc . " \r\n";
            $mensaje .= "Servicio: " . $servicio . " \r\n";
            $mensaje .= "Mensaje: " . $mensajeC . " \r\n";
            $mensaje .= "Enviado el " . date('d/m/Y', time());
            //Destinatario del Correo
            $para = 'danieltesorero2009@gmail.com';
            $asunto = 'Parque Virgen Morena-Clientes-Adherenc-Tarjeta';
            //Mensajes de Exito o Fallo
            if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
                
               header( "refresh:0;http://www.parquevirgen.com.mialias.net/index.html" );
               echo "<script>alert('Correo enviado, ¡Gracias!.');</script>";
               die();
               //die("Gracias, su mensaje se envio correctamente.");
              
              // $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado.A la brevedad nos comunicaremos contigo.Gracias.</div>';  
                //Ver para no salir de la pagina y seguir en la misma ademas creo q tendre q validar aca tambien, porque sino no vale.
                //el jquery q mande.

            } else {
                echo "<script>alert('!Error,Por favor intente de nuevo ¡Gracias!.');</script>";
                header("refresh:0;http://www.virgenmorena.com.mialias.net/solicitud.php" )
               //echo  $error = '<div class="alert alert-danger" role="alert"><p><strong>Mensaje sin enviar.Prueba nuevamente,disculpa las molestias.</div>';  
            } 
          
    
?>