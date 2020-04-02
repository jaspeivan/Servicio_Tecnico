<?php
require("connect.php");

     $tipousuario=$_POST['tipousuario'];
	$Usuario=$_POST['Usuario'];
	$NombreyApellido=$_POST['NombreyApellido'];
	$Cedula=$_POST['Cedula'];
	$Correo=$_POST['Correo'];
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];
	//$Esta=$_POST['Esta'];

    $passmd5=md5($pass);
	$rpassmd5=md5($rpass);

include ('validaciones/validarusuario.php');
$in="INSERT INTO login VALUES ( Null,'$tipousuario' , '1' , '$Usuario','$NombreyApellido','$Cedula','$Correo','$passmd5')";
 

$res=mysqli_query($con,$in);

if (!$res) {
	
	echo ' <script language="javascript">alert("No se pudo Registrar.");</script> ';
		 echo "<script>location.href='usuario.php'</script>";
}else{
	
	echo ' <script language="javascript">alert("Usuario Registrado Con Exito!!.");</script> ';
		 echo "<script>location.href='usuario.php'</script>";
	
}

mysqli_close($con);	
	

?>