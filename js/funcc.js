function comenzar (){
document.computadora.addEventListener("invalid",validar,true);
//var ventana= window.open("","","");
document.getElementById('Registrar').addEventListener("click",Registrar,false);
document.computadora.addEventListener("input", validar_tiempo_real,false);
document.computadora.addEventListener("textarea", validar_tiempo_real,false);

}


function validar(e){
var elemento=e.target;
elemento.style.background="#FFDDDD";

}

function enviar(){
	var correcto=document.computadora.checkValidity();
	if (correcto==true) {
		document.computadora.submit();
		
	}
}
function validar_tiempo_real(e){
			var elemento = e.target;

			if (elemento.validity.valid==true) {
				elemento.style.background="#ffff";	
						}else{
							elemento.style.background="#FFDDDD";
						}
		}

window.addEventListener("load",comenzar,false);