<?php

if (isset($_POST['Registrar'])) {
	$Usuario=$_POST['Usuario'];
	$NombreyApellido=$_POST['NombreyApellido'];
	$Cedula=$_POST['Cedula'];
	$Correo=$_POST['Correo'];
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];


	if (empty($Usuario)) {
		echo "LLene campo Usuario";
	exit;
	}
     if (empty($NombreyApellido)) {
		echo "LLene campo NombreyApellido";
	exit;
	}
	if (empty($Cedula)) {
		echo "LLene campo Cedula";
	exit;
	}
	if (empty($Correo)) {
		echo "LLene campo Correo";
	exit;
	}
	if (empty($pass)) {
		echo "LLene campo Contraseña";
	exit;
	}
	if (empty($rpass)) {
		echo "Llene campo de segunda contraseña";
	exit;
	}
}


?>