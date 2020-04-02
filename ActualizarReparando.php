<?php
include 'connect.php';

//en esta parte va ha esta almacenado la informacion que el técnico escribio que es enviado por el metodo POST
	$id_registropc=$_POST['id_registropc'];
	$id_dep=$_POST['id_dep'];
	$id_tipof=$_POST['id_tipof'];
	$id_estatus=$_POST['id_estatus'];
	$id=$_POST['id'];
	$id_empleado=$_POST['id_empleado'];
	$Fecha=$_POST['Fecha'];
	$Descripcion=$_POST['Descripcion'];
	$Codigo=$_POST['Codigo'];
    $FechaSalida=$_POST['FechaSalida'];
//este es la consulta que se va ha realizar que actualice, si un campo no esta igual mediante el ID 

 $act="UPDATE computadora SET id_registropc='$id_registropc' , id_dep='$id_dep',id_tipof='$id_tipof' ,id_estatus='$id_estatus',id='$id' , id_empleado='$id_empleado' , Fecha='$Fecha' , Descripcion='$Descripcion' , Codigo='$Codigo' , FechaSalida='$FechaSalida' WHERE id_registropc='$id_registropc'";
include 'validaciones/Validar.php';
$res=mysqli_query($con,$act) ;
if (!$res) {
	echo ' <script language="javascript">alert("No se pudo Actualizar Verifique.");</script> ';
		 echo "<script>location.href='Computadora1.php'</script>";
}else{
	echo ' <script language="javascript">alert("Se ha Actualizado con Exito!!.");</script> ';
		 echo "<script>location.href='Computadora1.php'</script>";
	}
mysqli_close($con);
?>