<?php

require  'connect.php';
//en esta parte va ha esta almacenado la informacion que el técnico escribio que es enviado por el metodo POST
    $id=$_POST['id'];
    $id_tipousuario=$_POST['id_tipousuario'];
    $id_estado=$_POST['id_estado'];
    $Usuario=$_POST['Usuario'];
	$NombreyApellido=$_POST['NombreyApellido'];
	$Cedula=$_POST['Cedula'];
	$Correo=$_POST['Correo'];
	$pass=$_POST['pass'];
	$rpass=$_POST['rpass'];

	$passmd5=md5($pass);
	$rpassmd5=md5($rpass);

	

//este es la consulta que se va ha realizar que actualice, si un campo no esta igual mediante el ID 
 $in="UPDATE login SET id_tipousuario='$id_tipousuario', id_estado='$id_estado', Usuario='$Usuario',NombreyApellido='$NombreyApellido', Cedula='$Cedula',Correo ='$Correo' , password='$passmd5' WHERE id='$id'";

$res=mysqli_query($con,$in);

if (!$in) {
	echo ' <script language="javascript">alert("No se pudo Actualizar.");</script> ';
		 echo "<script>location.href='usuario'</script>";
}else{
	echo ' <script language="javascript">alert("Se ha Actualizado con Exito!!.");</script> ';
		 echo "<script>location.href='usuario'</script>";
	
}

mysqli_close($con);	
	

?>