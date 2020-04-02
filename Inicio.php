<!--Este el inicio-->
<!DOCTYPE html>
<html lang="es">

<head>
	<link rel="icon" type="" href="img/logo_mppc.JPG">
<title>Servicio T&eacute;cnico Computacional </title>
</head>

<meta charset="utf-8">

<body>

          <?php
    
              
                    
include ('include/cabecera.php');
/*esto son  las sessiones de cada usuarios, mediante que un  usuario se logia, el programa va buscar si es el Administrador o Técnico como ves si es Administrador entra si no pasaria a elseif y lo vuelve para index, y si es el Administrador entraria a la pagina del Inicio, asi pasaria con el Técnico*/
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

 
             
                    
require 'connect.php';
 
?>
           
<div class="col-sm-12" style="top:10px; ">

<center>
	 	<div id="contenidos_externos"></div>

<br><br><br>
</body>
</center>
</div>
</div>

<br>
<div>
<?php
require 'footer.php';
?>
</div>

</html>