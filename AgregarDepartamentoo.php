<?php
include 'connect.php';
$Dep=$_POST['Dep'];
/* este seria el que no ve el usuario, aqui esta  la consulta, con la condicion del if va ha decir si todo esta bien, el departamento se Agrega si no el departamento no se pudo agregar*/
 $de="INSERT INTO departamento VALUES (Null,'$Dep')";

$re=mysqli_query($con,$de);

if (!$re) {
	echo '<script language="javascript">alert("No se pudo Agregar");</script>';
	 echo "<script>location.href='AgregarDepartamento.php'</script>";
}else{
	echo '<script language="javascript">alert("Departamento Agregado");</script>';
	 echo "<script>location.href='AgregarDepartamento.php'</script>";
}
mysqli_close($con);
?>