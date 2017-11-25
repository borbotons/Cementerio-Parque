function operacion(boton){


select_a = Number(document.getElementById('a').options[document.getElementById('a').selectedIndex].value); 
select_b = Number(document.getElementById('b').options[document.getElementById('b').selectedIndex].value); 


if (select_a==1) {
 
	aux1 = 400;
	aux2 = 75;
	//necedito llamar al boton correspondiente con esta opcion por lo menos la del plan de 1
	//o sea que ademas del valor devuelvo cambie el boton que envia a mercadolibre ...p
	//podemos probar con guardar una variable aux3 que guarde la convinacion y segun eso envie a mercadolibre.
	// y tambien permita mandar la informacion para la tarjeta naranja como se aux3=10 corresponde al plan 1 adher 0
	//aux3=13 corresponde al plan 1 adherentes 3.

	valor = aux1 + select_b*aux2;
	document.getElementById('preciofinal').value= valor;

	

}

if (select_a==2) {

	aux1 = 250;
	aux2 = 50;

	valor = aux1 + select_b*aux2;
	document.getElementById('preciofinal').value=valor;

}

if (select_a==3) {

	aux1 = 250;
	aux2 = 35;

	valor = aux1 + select_b*aux2;
	document.getElementById('preciofinal').value=valor;

}

if (select_a==4) {

	aux1 = 150;
	aux2 = 20;

	valor = aux1 + select_b*aux2;
	document.getElementById('preciofinal').value=valor;

}
if (select_a==5) {

	aux1 = 250;
	aux2 = 35;

	valor = aux1 + select_b*aux2;
	document.getElementById('preciofinal').value=valor;

}
if (select_a==6) {

	aux1 = 150;
	aux2 = 20;

	valor = aux1 + select_b*aux2;
	document.getElementById('preciofinal').value=valor;

}







}













