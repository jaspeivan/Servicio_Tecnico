<?php 
session_start();
if($_SESSION['tipodeusuario']=='Administrador'){	
	echo ' <script language="javascript">alert("Cerrando Sesion Hasta luego '.$_SESSION['NombreyApellido'].' ");</script> ';
	

	echo "<script>location.href='index.php'</script>";
	header('location=index.php');



}elseif($_SESSION['tipodeusuario']=='Tecnico'){
	
echo ' <script language="javascript">alert("Cerrando Sesion Hasta luego '.$_SESSION['NombreyApellido'].' ");</script> ';

	echo "<script>location.href='index.php'</script>";
	header('location=index.php');
}
session_destroy();


?>
