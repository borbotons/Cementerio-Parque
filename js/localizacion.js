
// Función de autocompletarde Google places API para ayudar a los usuarios rellenar la información.
 
var placeSearch, autocomplete, autocomplete_textarea;

 
function initialize() {
  // Cree el objeto de autocompletado, restringiendo la búsqueda
  autocomplete = new google.maps.places.Autocomplete(
     (document.getElementById('autocomplete')),
      { types: ['geocode'] });
  
  
  autocomplete_textarea = new google.maps.places.Autocomplete((document.getElementById('autocomplete_textarea')),
      { types: ['geocode'] }
  );
  google.maps.event.addListener(autocomplete_textarea, 'place_changed', function() {
    fillInAddress_textarea();
  });
}
 
function fillInAddress_textarea(){
	var place = autocomplete_textarea.getPlace();
	console.log( place.formatted_address );
	console.log( JSON.stringify(place) );
	$('#autocomplete_textarea').val( place.formatted_address );
}
 
 
function fillInAddress() {
  // Obtener los detalles de lugar el objeto de autocompletado.
  var place = autocomplete.getPlace();
  console.log( JSON.stringify(place) );
  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }
}
 

 
