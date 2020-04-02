window.onload = iniciar;

function iniciar() {
    document.getElementById("enviar").addEventListener('click', validar, false);
}



function validadatos() {


    
    var obs2=document.form.obs_recep;


    
    


    if (obs2.value == "" ||  obs2.value.length>200 ){
        alert("[ERROR]Ingrese la Observacion 2")
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