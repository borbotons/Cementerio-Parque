<?php

$servicio444= $_POST['servicio'];


require 'solicitud.html';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Alta</title>
</head>
<body>
<h1>Bienvenido, Complete los campos y seleecione la tarjeta </h1>
<h3>El plan seleccionado es <?php echo $servicio444;?></h3>

<form name="usuarioalta" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">Formulario

	<div>
		 <input type="text" name="nombrec" placeholder="Ingrese nombre">

	</div>
	<div>
		<input type="numeric" name="dni" placeholder="Ingrese dni">

	</div>
	<div>
		<input type="numeric" name="dni" placeholder="<?php echo $servicio444;?>">

	</div>
	



	<div>
		
	
	<label for="Hombre"><?php echo $servicio444;?> </label>
	<input type="radio" name="serv" value="Hombre" ><br>
	<label for="Mujer">Servicio1 </label>
	<input type="radio" name="serv" value="Mujer" ><br>
	<label for="Mujer">Mujer </label>
	<input type="radio" name="serv" value="Mujer" ><br>
	<label for="Mujer">Mujer </label>
	<input type="radio" name="serv" value="Mujer" ><br>



		<select name="servicios" >
		<option value="<?php echo $servicio444;?>">ServicioElegido</option>
		<option value="serv1">Servicio 1</option>
		<option value="serv2">Servicio 2</option>
		<option value="serv3">Servicio 3</option>
		</select>
		<br>


	</div>
	<p>Por favor seleccione la tarjeta la cual usted posee .Gracias.</p>
	<div>
		<button class="" name="TNa">Tarjeta Naranja</button>
		<button class="" name="TNe">Tarjeta Nevada</button>
		<button class="" name="TBanc">Tarjeta Bancat</button>
		<button class="" name="TCen">Tarjeta CentroCard</button>
		<button class="" name="TVis">Tarjeta VISA_CAT</button>

	</div>




</form>>

</body>
</html>

