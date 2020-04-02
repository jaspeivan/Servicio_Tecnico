


<?php
	include 'plantilla.php';
	require 'connect.php';
	

     $id_estatus=$_POST['id_estatus'];
 $Fecha=$_POST['Fecha'];
 $FechaSalida=$_POST['FechaSalida'];
 $id_dep=$_POST['id_dep'];
 $id_tipof=$_POST['id_tipof'];
 $id=$_POST['id'];
	
    $query="SELECT computadora.id_registropc , computadora.Nombres , computadora.Apellido , computadora.Cedula , computadora.Fecha , computadora.Descripcion , computadora.Codigo , computadora.FechaSalida, departamento.Departamento , tipofalla.tipodefalla , estatus.Estatus , login.NombreyApellido FROM computadora INNER JOIN departamento on computadora.id_dep=departamento.id_dep INNER JOIN tipofalla on computadora.id_tipof=tipofalla.id_tipof INNER JOIN estatus on computadora.id_estatus=estatus.id_estatus INNER JOIN login on computadora.id=login.id WHERE (computadora.id_estatus='$id_estatus' or '$id_estatus'='t') and (computadora.id_dep='$id_dep' or '$id_dep'='t')and (computadora.id_tipof='$id_tipof' or '$id_tipof'='t') and(computadora.id='$id' or '$id'='t') or (computadora.id_estatus='$id_estatus') or (computadora.id_dep='$id_dep') or (computadora.id_tipof='$id_tipof') or (computadora.id='$id') ";

	$res = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	
	
	
	
	while($row = $res->fetch_assoc())
	{
  	

	}
	$pdf->Output();
?>