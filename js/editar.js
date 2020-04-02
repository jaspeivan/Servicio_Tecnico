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