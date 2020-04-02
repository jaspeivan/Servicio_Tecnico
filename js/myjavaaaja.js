$(function() {
	$('#guardar').on('click', function(){
		var url = document.URL;
		location.href=url;
	});
	
	$('#registarnuevo').on('click', function(){
		$('#nuevoenvio').modal({
			show:true,
			backdrop:'static',
		});
	});
	


});




function EditarUsuario(codigo){

	$.ajax({
		type: 'POST',
		data: 'codigo='+codigo,
		url: 'EditarUsuario.php',
		success: function(data){
			
			$('#datosAqui3').html(data);
			$('#ActualizarUsuario').modal({
				show:true,
				backdrop:'static',
			});
		}
	});
	return false;
}
function EliminarUsuario(codigo){

	$.ajax({
		type: 'POST',
		data: 'codigo='+codigo,
		url: 'EliminarUsuario.php',
		success: function(data){
			
			$('#datosAqui3').html(data);
			$('#EliminarUsu').modal({
				show:true,
				backdrop:'static',
			});
		}
	});
	return false;
}



function EditarComputadora(codigo){

	$.ajax({
		type: 'POST',
		data: 'codigo='+codigo,
		url: 'editarComputadora.php',
		success: function(data){
			
			$('#datosAqui3').html(data);
			$('#ActualizarComputadora').modal({
				show:true,
				backdrop:'static',
			});
		}
	});
	return false;
}

function EliminarComp(codigo){

	$.ajax({
		type: 'POST',
		data: 'codigo='+codigo,
		url: 'EliminarComp.php',
		success: function(data){
			
			$('#datosAqui3').html(data);
			$('#EliminarComputadora').modal({
				show:true,
				backdrop:'static',
			});
		}
	});
	return false;
}
function EditarComputadoraReparando(codigo){

	$.ajax({
		type: 'POST',
		data: 'codigo='+codigo,
		url: 'EditarComputadoraReparando.php',
		success: function(data){
			
			$('#datosAqui3').html(data);
			$('#ActualizarReparando').modal({
				show:true,
				backdrop:'static',
			});
		}
	});
	return false;
}