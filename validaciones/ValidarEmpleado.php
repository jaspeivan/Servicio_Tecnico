<?php

if (isset($_POST['Registrar'])) {
	$Nombre=$_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Cedula=$_POST['Cedula'];
	$Correo=$_POST['Correo'];
	$Direccion=$_POST['Direccion'];
	$Telefono=$_POST['Telefono'];
	$Genero=$_POST['Genero'];


if (empty($Nombre)) {
    echo "Tines que Rellenar Campo Nombre";
    exit;
}
if(empty($Apellido)){
	echo "Tines que Rellenar Campo Apellido";
	exit;
}
if (empty($Cedula)) {
	echo "Tienes que Rellenar Campo Cedula";
	exit;
}else{ 
if(!is_numeric($Cedula)){
	echo "La Cedula Tienes que ser Numero";
	exit;
}

}
if(empty($Correo)){
	echo "Tienes que Rellenar Campo Correo";
	exit;
}
if(empty($Direccion)){
	echo "Tienes que Rellenar Campo Direccion";
	exit;
}
if(empty($Telefono)){
	echo "Tienes que Rellenar Campo Telefono";
	exit;
}else{
	if(!is_numeric($Telefono)){
		echo "El telefono Tienes que ser Numero";
		exit;
	}
}
if(empty($Genero)){
	echo "Tienes que Rellenar  Campo Genero";
exit;
}

}


?>