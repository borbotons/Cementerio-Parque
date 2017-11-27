

var clic = 1;

function mostrar() {

if (clic==1) {
div2=document.getElementById('flotante2');
div2.style.display = 'none';
div=document.getElementById('flotante');
div.style.display = '';
clic = clic + 1;
}

else{
	div2=document.getElementById('flotante2');
	div2.style.display = 'none';
	div=document.getElementById('flotante');
	div.style.display = 'none';
	clic = 1;
}

	// body...
}



var clic2 = 1;

function mostrar2() {

if (clic2==1) {

div=document.getElementById('flotante');
div.style.display = 'none';
div2=document.getElementById('flotante2');
div2.style.display = '';
clic2 = clic2 + 1;
}

else{
	div=document.getElementById('flotante');
	div.style.display = 'none';
	div2=document.getElementById('flotante2');
	div2.style.display = 'none';
	clic2 = 1;
}

	// body...
}