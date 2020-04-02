<?php
include 'connect.php';
$tip=$_POST['tip'];
/* este seria el que no ve el usuario, aqui esta  la consulta, con la condicion del if va ha decir si todo esta bien, el tipo de falla no se pudo agregar si no el tipo de falla fue agregado con exicto*/
 $fa="INSERT INTO tipofalla VALUES (Null,'$tip')"; 

$re=mysqli_query($con,$fa);

if (!$re) {
	echo '<script language="javascript">alert("No se pudo Agregar");</script>';
	 echo "<script>location.href='AgregarTipodefalla.php'</script>";
}else{
	echo '<script language="javascript">alert("tipo de falla Agregado");</script>';
	 echo "<script>location.href='AgregarTipodefalla.php'</script>";
}
mysqli_close($con);
?>