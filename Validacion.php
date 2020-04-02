<?php
/*aqui es cuando se logea el Usuario que le dara el permiso sea Administrador o Técnico*/
session_start();
require 'connect.php';
$Usuario=$_POST['Usuario'];
$pass=$_POST['pass'];
$passmd5=md5($pass);

 $en="SELECT login.id,login.Usuario, login.NombreyApellido, login.password,tipo_usuario.tipodeusuario,estado.Estado FROM login INNER JOIN tipo_usuario on login.id_tipousuario=tipo_usuario.id_tipousuario INNER JOIN estado on login.id_estado=estado.id_estado WHERE login.Usuario='$Usuario' and login.password='$passmd5'"; 

$re=mysqli_query($con,$en);
if($res=mysqli_fetch_assoc($re)) {
	
if ($passmd5=$res['password']){
	$_SESSION['id']=$res['id'];
	$_SESSION['Usuario']=$res['Usuario'];
  $_SESSION['NombreyApellido']=$res['NombreyApellido'];

	$_SESSION['tipodeusuario']=$res['tipodeusuario'];
	$_SESSION['Estado']=$res['Estado'];
	$NombreyApellido=$res['NombreyApellido'];
    $tipodeusuario=$res['tipodeusuario'];
 setcookie("c_Usuario",$Usuario);
setcookie("c_NombreyApellido" ,$NombreyApellido);
setcookie("tipodeusuario",$tipodeusuario);
setcookie("c_mensaje" ,0);


if ($res['Estado']=='Desactivo') {
 echo "<script>location.href='inactivo.php'</script>";
           
   }elseif ($res['tipodeusuario']=='Administrador') {
     
     echo ' <script language="javascript">alert("Bienvenido:'.$_SESSION['NombreyApellido'].' ");</script> '; 
     setcookie("c_mensaje" ,3);   
     echo "<script>location.href='inicio.php'</script>"; 
     }
 
	  
	  if ($res['tipodeusuario']=='Tecnico') {
	
	 echo ' <script language="javascript">alert("Bienvenido:'.$_SESSION['NombreyApellido'].' ");</script> ';
	 setcookie("c_mensaje" ,3);
    echo "<script>location.href='inicio.php'</script>"; 
    }

  if ($res['tipodeusuario']=='Usuario') {
  	echo ' <script language="javascript">alert("Bienvenido.Usuario");</script>';
  	setcookie("c_mensaje" ,3);
    echo "<script>location.href='inicio.php'</script>"; 
  
  }
  if ($res['Usuario']=='Usuario') {
     	setcookie("c_mensaje" ,5);
     echo "<script>location.href='inicio.php'</script>";
	}	   
		 	   
 }else{
 echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
setcookie("c_mensaje" ,4);
    // echo ' <script language="javascript">alert("Usuario y/o Contraseña Equivocada.");</script> ';
  echo "<script>location.href='index.php'</script>";
  
}
}else{

    	//echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
  	setcookie("c_mensaje" ,5);
     echo ' <script language="javascript">alert("Usuario y/o Contraseña Invalida.");</script> ';
  echo "<script>location.href='index.php'</script>";
  
   }
      
mysqli_close($con);
         ?>
