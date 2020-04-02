 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="" href="img/logo_mppc.JPG">
  <title>Sistema del Servicio Técnico</title>
  <script lenguaje="javascript" src="V.js" type="text/javascript"></script>
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
  
</head>
<body>
 <?php

include ('include/cabecera.php');

session_start();

 if ($_SESSION['tipodeusuario']=='Administrador') {

 include ('include/menu.php');
 }elseif ($_SESSION['tipodeusuario']==Null) {

 	echo "<script>location.href='index.php'</script>";
	header('location=index.php');

 }
 if ($_SESSION['tipodeusuario']=='Tecnico') {
 include ('include/menu2.php');

 }elseif ($_SESSION['tipodeusuario']==Null) {
 	echo "<script>location.href='index.php'</script>";
	header('location=index.php');
 }
 if ($_SESSION['tipodeusuario']=='Usuario') {
 	include ('include/menu3.php');
 }elseif ($_SESSION['tipodeusuario']==Null) {
 	echo "<script>location.href='index.php'</script>";
	header('location=index.php');
 }

 if ($_SESSION['Estado']=='Desactivo') {
 		echo "<script>location.href='index.php'</script>";
	header('location=index.php');
 		
 }

include 'UsuarioRegistrado.php';

?>
<footer>
	
</footer>
</body>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include 'footer.php';
?>
</html>
<br><br><br><br><br>
