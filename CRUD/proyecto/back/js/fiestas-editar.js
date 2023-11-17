
//Detecta que se selecciono en el combo fiesta-evento y carga la lista en funcion
function actualizarSubcategorias(valor) {
	$.get("clases/buscarContenido.php",{t:"subcategorias",v:valor}, function(data){
		$('#lsubcategorias').empty();
		$('#lsubcategorias').append(data);
	});	
}

function mostrarOpcionesPrecio() {
	var gratuito = $('#gratuito').val();
	if(gratuito == "SI") {
		$('#no_gratuito').hide();
	} else {
		$('#no_gratuito').show();
	}
}

function mostrarPrecioDiferenciado(valor) {
  if(valor) {
  	$('#precio_diferenciado').show();
  } else {
  	$('#precio_diferenciado').hide();
  }
}

function abrir(id,page) {
	if (page == "Promociones") {
		window.open("fiestas-promociones.php?id="+id);
	} else if(page == "Descuentos") {
		window.open("fiestas-descuentos.php?id="+id);
	} else if(page == "Imagenes") {
		window.open("fiestas-iv.php?id="+id);		
	}
	
}