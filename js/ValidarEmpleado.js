function ValidarEmpleado(){

var Nombres=document.getElementById('Nombre').value;
var Apellido=document.getElementById('Apellido').value;
var Cedula=document.getElementById('Cedula').value;
var Correo=document.getElementById('Correo').value;
var Direccion=document.getElementById('Direccion').value;
var Telefono=document.getElementById('Telefono').value;
var Genero=document.getElementById('Genero').value;


if (Nombres==0) {
 
 Alert("Rellene campo Nombre");
return 0;
}else if(!isNaN(Nombres)){
	alert("Tienes que Colocar Tu Nombre Bien");
	return 0;
}

if (Apellido==0) {
 
 Alert("Rellene campo Nombre");
return 0;
}else if(!isNaN(Apellido)){
	alert("Tienes que Colocar Tu Apellido Bien");
	return 0;
}

if (Cedula==0) {
 
 Alert("Rellene campo Nombre");
return 0;
}else if(isNaN(Cedula)){
	alert("Tienes que Colocar tu Cedula Bien ");
	return 0;
}

if (Correo==0) {
 
 Alert("Rellene campo Nombre");
return 0;
}else if(!isNaN(Correo)){
	alert("Tienes que Colocar Tu Correo Bien");
	return 0;
}

if (Direccion==0) {
 
 Alert("Rellene campo Direccion");
return 0;

}else if (!isNaN(Direccion)){
	Alert("Tienes que Colocar Tu Correo Bien");
	return 0;
}

if (Telefono==0) {
 
 Alert("Rellene campo Telefono");
return 0;

}else if (isNaN(Telefono)){
	Alert("Tienes que Colocar Telefono Bien");
	return 0
}

if (Genero==0) {
 
 Alert("Rellene campo Genero");
return 0;

}else if (!isNaN(Genero)){
	Alert("Tienes que Colocar Genero Bien");
	return 0;
}



}