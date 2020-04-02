<!DOCTYPE html>
<html>
<head>

<link rel="icon" type="" href="img/logo_mppc.JPG">
  <title>Servicio T&eacute;cnico Computacional</title>
  
</head>


<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">





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
include 'ComputadoraReparada.php';

?>

	

</body>


<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
<?php
include 'footer.php';
?>
	
</footer>
</html>

