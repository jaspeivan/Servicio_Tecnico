<?php
include 'connect.php';

if (isset($_POST['Registrar'])) {
	$Nombre=$_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Cedula=$_POST['Cedula'];
	$Correo=$_POST['Correo'];
	$Direccion=$_POST['Direccion'];
	$Telefono=$_POST['Telefono'];
	$Genero=$_POST['Genero'];
}
 $ins="INSERT INTO empleado VALUES (Null,'$Nombre','$Apellido','$Cedula','$Correo','$Direccion','$Telefono','$Genero')";

$ress=mysqli_query($con,$ins);

if(!$ress){

echo ' <script language="javascript">alert("No se pudo Registrar.");</script> ';
		 echo "<script>location.href='RegistrodeTrabajadores.php'</script>";
}else{
	
	echo ' <script language="javascript">alert("Se ha Registrada Con Exito!!.");</script> ';
		 echo "<script>location.href='Inicio.php'</script>";
	}

mysqli_close($con);	
	

?>