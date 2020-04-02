var validarUsuario = function () {

var txtUsuario = document.getElementById('Usuario').value;
var txtNombreyApellido = document.getElementById('NombreyApellido').value;
var txtCedula = document.getElementById('Cedula').value;
var txtCorreo = document.getElementById('Correo').value;

var txtpass = document.getElementById('pass').value;
var txtrpass = document.getElementById('rpass').value;

if (txtUsuario==0) {
	alert("Rellene el  campo Usuario");
	return false;
}
if (txtNombreyApellido==0) {
	alert("Rellene  el Campo NombreyApellido");
	return false;
}
if (txtCedula==0) {
	alert("Rellene el  Campo Cedula");
	return false;
}

if (txtCorreo==0) {

	alert("Rellene el Campo Correo");
	return false;
}

if (txtpass==0) {
	alert("Rellene el  Campo Contraseña");
	return false;
}

if (txtrpass==0) {
	alert("Rellene el  campo Confirme Contraseña");
	return false;
}

}