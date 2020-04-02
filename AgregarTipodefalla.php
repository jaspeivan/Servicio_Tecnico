<!--esto es el codigo del formulario de Agregar Departamento-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="" href="img/logo_mppc.JPG">
	<title>Sistema Del Servicio Técnico</title>
</head>
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
?>
<div id="hola">
<div class="col-xs-8 col-sm-8 col-md-7 col-lg-7 col-md-7 col-xs-offset-2">
	<form name="form" action="AgregarTipodefallaa.php" method="POST">
		<br>
		<div class="panel panel-default panel-table">
			<div class="panel-heading"><h4 style="color: black" align="center">Agregar Tipo de Falla</h4></div>

			<div class="panel-body">
				<br>
				<div class="form-group col-xc-5" align="center">
					<label>Ingrese  Tipo De Falla</label>
					<input type="text" name="tip" id="tip" class="form-control" placeholder="Ingrese tipo de falla" required>
					<br>
				<input type="Submit" name="Agregar" id="Agregar" value="Agregar" class="btn btn-success">
				</div>
			</div>
				
			</div>
		</div>
		
	</form>
	</div>
</div>

<?php

include 'footer.php';
?>


</body>

</html>