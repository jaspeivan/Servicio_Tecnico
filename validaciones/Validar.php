<?php

if (empty($_POST['Guardar'])) {
	$id_registropc=$_POST['id_registropc'];
	$id_dep=$_POST['id_dep'];
	$id_tipof=$_POST['id_tipof'];
	$id_estatus=$_POST['id_estatus'];
	$id=$_POST['id'];
	$Cedula=$_POST['Cedula'];
	$Fecha=$_POST['Fecha'];
	$Descripcion=$_POST['Descripcion'];
	$Codigo=$_POST['Codigo'];
    $FechaSalida=$_POST['FechaSalida'];


if (empty($FechaSalida)) {
	echo "<script language='javascript'>alert('tienes que llenar campo Fecha Actualizada');</script>";
    echo "tienes que llenar campo Fecha Actualizada";
}

}





?>