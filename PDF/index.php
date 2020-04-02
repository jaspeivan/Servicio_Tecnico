<?php
     
	include 'plantilla.php';
	require 'connect.php';
	extract($_GET);
  
	$query="SELECT computadora.id_registropc, computadora.Fecha , computadora.FechaSalida, computadora.Descripcion , computadora.Codigo , departamento.Departamento , tipofalla.tipodefalla , estatus.Estatus, login.NombreyApellido,empleado.Nombre,empleado.Apellido,empleado.Cedula FROM computadora INNER JOIN departamento on computadora.id_dep=departamento.id_dep INNER JOIN tipofalla on computadora.id_tipof=tipofalla.id_tipof INNER JOIN estatus on computadora.id_estatus=estatus.id_estatus INNER JOIN login on computadora.id=login.id INNER JOIN empleado on computadora.id_empleado=empleado.id_empleado where computadora.id_registropc=$id";

$resultado=$con->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
while($row=mysqli_fetch_array($resultado))
{
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'',0,1,'C',0);
$pdf->Cell(50,6,'Nombre',1,0,'C',1);
$pdf->Cell(50,6,'Apellido',1,0,'C',1);
$pdf->Cell(50,6,'Cedula',1,0,'C',1);
$pdf->Cell(45,6,'Codigo',1,1,'C',1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,utf8_decode($row['Nombre']),1,0,'C');
$pdf->Cell(50,6,utf8_decode($row['Apellido']),1,0,'C');
$pdf->Cell(50,6,utf8_decode($row['Cedula']),1,0,'C');
$pdf->Cell(45,6,utf8_decode($row['Codigo']),1,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'',0,1,'C',0);
$pdf->Cell(100,6,'Departamento',1,0,'C',1);
$pdf->Cell(95,6,'Tipo De Falla',1,1,'C',1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,6,utf8_decode($row['Departamento']),1,0,'C');
$pdf->Cell(95,6,utf8_decode($row['tipodefalla']),1,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'',0,1,'C',0);
$pdf->Cell(195,7,'Descripcion',1,1,'C',1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(195,7,utf8_decode($row['Descripcion']),1,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'',0,1,'C',0);
$pdf->Cell(100,7,'Fecha  Recibido ',1,0,'C',1);
$pdf->Cell(95,7,'Fecha de Salida',1,1,'C',1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,7,utf8_decode($row['Fecha']),1,0,'C');
$pdf->Cell(95,7,utf8_decode($row['FechaSalida']),1,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,6,'',0,1,'C',0);
$pdf->Cell(100,7,'Estatus ',1,0,'C',1);
$pdf->Cell(95,7,'Tecnico',1,1,'C',1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,7,utf8_decode($row['Estatus']),1,0,'C');
$pdf->Cell(95,7,utf8_decode($row['NombreyApellido']),1,1,'C');


$pdf->SetFont('Arial','B',15);
$pdf->Cell(100,6,'',0,2,'C',0);
$pdf->Cell(100,6,'',0,2,'C',0);
$pdf->Cell(100,6,'',0,2,'C',0);
$pdf->Cell(100,6,'',0,2,'C',0);
$pdf->Cell(100,7,'Firma de Tecnico ',1,0,'C',1);
$pdf->Cell(95,7,'Firma de Usuario',1,1,'C',1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(100,6,'',0,2,'C',0);
$pdf->Cell(100,6,'',0,2,'C',0);
$pdf->Cell(100,6,'',0,2,'C',0);
$pdf->Cell(100,6,'',0,2,'C',0);
$pdf->Cell(100,0,utf8_decode('_____________________'),0,0,'C');
$pdf->Cell(100,0,utf8_decode('_______________________'),0,0,'C');
}
$pdf->Output();
?>