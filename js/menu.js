/*jQuery time*/
$(document).ready(function(){
	$("#accordian h3").click(function(){
		//desliza hacia arriba todas las listas de enlaces
		$("#accordian ul ul").slideUp();
		//desliza hacia abajo la lista de enlaces debajo del clic h3 - solo si está cerrado
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})