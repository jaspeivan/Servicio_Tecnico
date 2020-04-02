window.onload = iniciar;

function iniciar() {
    document.getElementById("enviar").addEventListener('click', validar, false);
}



function validadatos() {


    var one=document.form.palabra2;
    var cantidad=document.form.cantidad;
    var remi=document.form.remitente;
    var desti=document.form.destinatario;
    var obs1=document.form.observa_envio;


    if (one.value == "" || one.value == 0 || isNaN(one.value)) {
        alert("Ingrese Numero de Correspondencia")
        return false;
        
    }


    if (cantidad.value == "" || cantidad.value == 0 || isNaN(cantidad.value) ) {
        alert("Ingrese una cantidad ")
        return false;
    }

    if (cantidad.value  >= 101) {
        alert("[ERROR]La cantidad es muy grande ")
        return false;
    }

    if (remi.value == "" ||  remi.value.length>30 || !(/^([A-ZÁÉÍÓÚa-zñáéíóú]{1,24}[\s]*)+$/.test(remi.value)) ){
        alert("[ERROR]Ingrese Remitente")
        return false;
    }

  if (desti.value == "" ||  desti.value.length>30 || !(/^([A-ZÁÉÍÓÚa-zñáéíóú]{1,24}[\s]*)+$/.test(desti.value)) ){
        alert("[ERROR]Ingrese destinatario")
        return false;
    }


    if (obs1.value == "" ||  obs1.value.length>200 ){
        alert("[ERROR]Ingrese la Observacion")
        return false;
    }




        return true;

        
}
    

function validar(e) {
    
    if (validadatos()  && confirm("Pulsa aceptar si deseas enviar el formulario")) {
        return false;
    } else {
        e.preventDefault();
        return false;
    }}