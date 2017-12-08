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
	
		
		
		//document.getElementById('holas').href = valor4;
		if(select_b==0){
			valor4="PGrupo Familiar Premium Base";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.getElementById('merc').placeholder = valor4 ;
			document.contacto2.hos.value='';
		}
		if(select_b==1){
			valor4="PGrupo Familiar Premium +1";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==2){
			valor4="PGrupo Familiar Premium +2";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==3){
			valor4="PGrupo Familiar Premium +3";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==4){
			valor4="PGrupo Familiar Premium +4";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==5){
			valor4="PGrupo Familiar Premium +5";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value= 'http://mpago.la/Jh8U';
		}
	
		document.getElementById('preciofinal').value= '$'+valor;
		//document.contacto2.hos.value= 'www.trucoteca.com';
		
	
	}
	
	if (select_a==2) {
	
		aux1 = 250;
		aux2 = 50;
	
		valor = aux1 + select_b*aux2;
	
		if(select_b==0){
			valor4="PGrupo Familiar Directo Base";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==1){
			valor4="PGrupo Familiar Directo +1";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==2){
			valor4="PGrupo Familiar Directo +2";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==3){
			valor4="PGrupo Familiar Directo +3";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==4){
			valor4="PGrupo Familiar Directo +4";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==5){
			valor4="PGrupo Familiar Directo +5";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
	
		document.getElementById('preciofinal').value='$'+valor;
	
	}
	
	if (select_a==3) {
	
		aux1 = 250;
		aux2 = 35;
	
		valor = aux1 + select_b*aux2;
	
		if(select_b==0){
			valor4="PCementerio Parque Premium Base";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==1){
			valor4="PCementerio Parque Premiun +1";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==2){
			valor4="PCementerio Parque Premium +2";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==3){
			valor4="PCementerio Parque Premium +3";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==4){
			valor4="PCementerio Parque Premium +4";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==5){
			valor4="PCementerio Parque Premium +5";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
	
		document.getElementById('preciofinal').value='$'+valor;
	
	}
	
	if (select_a==4) {
	
		aux1 = 150;
		aux2 = 20;
	
		valor = aux1 + select_b*aux2;
	
		if(select_b==0){
			valor4="PCementerio Parque  Base";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==1){
			valor4="PCementerio Parque  +1";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==2){
			valor4="PCementerio Parque  +2";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==3){
			valor4="PCementerio Parque  +3";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==4){
			valor4="PCementerio Parque  +4";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==5){
			valor4="PCementerio Parque  +5";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
	
		document.getElementById('preciofinal').value='$'+valor;
	
	}
	if (select_a==5) {
	
		aux1 = 250;
		aux2 = 35;
	
		valor = aux1 + select_b*aux2;
	
		if(select_b==0){
			valor4="Servicio Funebre Premium Base";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==1){
			valor4="Servicio Funebre Premium +1";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==2){
			valor4="Servicio Funebre Premium +2";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==3){
			valor4="Servicio Funebre Premium +3";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==4){
			valor4="Servicio Funebre Premium +4";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==5){
			valor4="Servicio Funebre Premium +5";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
	
		document.getElementById('preciofinal').value='$'+valor;
	
	}
	if (select_a==6) {
	
		aux1 = 150;
		aux2 = 20;
	
		valor = aux1 + select_b*aux2;
	
		if(select_b==0){
			valor4="Servicio Funebre Base";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==1){
			valor4="Servicio Funebre +1";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==2){
			valor4="Servicio Funebre +2";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==3){
			valor4="Servicio Funebre +3";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==4){
			valor4="Servicio Funebre +4";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
		if(select_b==5){
			valor4="Servicio Funebre +5";
			document.getElementById('holas').placeholder = valor4;
			document.getElementById('holas').value =valor4;
			document.contacto2.hos.value='';
		}
	
		document.getElementById('preciofinal').value='$'+valor;
	
	}
	
	
	
	
	
	
	
	}









