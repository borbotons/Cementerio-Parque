<?php
    //Mandar correo a travez del hosting+version estandar.
    header("Content-type: text/html;charset=\"utf-8\"");
    $error = ""; $mensajeExito = "";
            //Paso de datos mediante la url.
            $nombre = $_POST['name'];
            $mail = $_POST['email'];
            $domicilio = $_POST['autocomplete'];
            $telefono = $_POST['tel'];
            $asuna = $_POST['some_field'];

            $num = count($asuna);

            echo 'Checkbox seleccionado'.'su valor es:'.$num;



          /*  echo $asuna[];
            if($asuna.[$n]==0 )
            {
                $asun='Seguro Sepelio';
            
            }*/

            //if($asun)



/*
            $mensajeC = $_POST['message'];
            //Cabecera del correo
            $header = 'From: ' . $mail . " \r\n";
            $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
            $header .= "Mime-Version: 1.0 \r\n";
            $header .= "Content-Type: text/plain";
            //Cuerpo del Correo
            $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
            $mensaje .= "Su e-mail es: " . $mail . " \r\n";
            $mensaje .= " Direccion: " . $domicilio . " \r\n";
            $mensaje .= " Tel: " . $telefono . " \r\n";
            $mensaje .= "Asunto: " . $asun . " \r\n";
            $mensaje .= "Mensaje: " . $mensajeC . " \r\n";
            $mensaje .= "Enviado el " . date('d/m/Y', time());
            //Destinatario del Correo
            $para = 'danieltesorero2009@gmail.com';
            $asunto = 'Parque Virgen Morena-Clientes';
            //Mensajes de Exito o Fallo
            if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
                
               header( "refresh:0;../contacto.html" );
               echo "<script>alert('Mensaje enviado, ¡Gracias!.');</script>";
               die();
              
               $mensajeExito = '<div class="alert alert-success" role="alert">Mensaje enviado.A la brevedad nos comunicaremos contigo.Gracias.</div>';  
                //Ver para no salir de la pagina y seguir en la misma ademas creo q tendre q validar aca tambien, porque sino no vale.
                //el jquery q mande.
                //Tomar bien la opcion del asun.(el de textarea) Ver el tema si selecciono if 1=Sepelio 2=Crematorio 3=Parcela
            } else {
                echo "<script>alert('Error no se envio el mensaje,por favor intente mas tarde ¡Gracias!.');</script>";
            } 
          
  */  
?>
