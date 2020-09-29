<?php
include ('connect.php');
 if(isset($_POST['Registrar'])){
 	$Dep=$_POST['Dep'];
	$tip=$_POST['tip'];
	$tecnico=$_POST['tecnico'];
	$id_empleado=$_POST['id_empleado'];
	$Fecha=date('d/m/Y');
	$Descripcion=$_POST['Descripcion'];
	$Codigo=$_POST['Codigo'];
	$FechaSalida='20-09-10';
	$Estatus='Esperando';
	$id='1';

	include ('validaciones/validarformulario.php');
  
}

$in="INSERT INTO computadora VALUES ( Null, '$Dep','$id','$tip','1','$id_empleado','$tecnico', '$Codigo', '$Descripcion', '$Fecha', '$FechaSalida')" ;


echo $in;
$res=mysqli_query($con,$in);


if (!$res) {
	
	//echo ' <script language="javascript">alert("No se pudo Registrar Intente Nuevamente .");</script> ';
		// echo "<script>location.href='RegistroComputadora.php'</script>";
}else{
	
	echo ' <script language="javascript">alert("Computadora  Registrada Con Exito!!.");</script> ';
		 echo "<script>location.href='Computadora.php'</script>";
	}

mysqli_close($con);	
	

?>