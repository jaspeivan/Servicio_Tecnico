<!--formulario para registrar Usuario-->
<!DOCTYPE html>
<html lang="es">
<head>
	  <meta charset="utf-8">
	 <link rel="icon" type="" href="img/logo_mppc.JPG">
  <title>Sistema del Servicio T&eacute;cnico</title>
  <link rel="stylesheet" type="text/css" media="screen" href="css/estilos2.css" />
  <script lenguaje="javascript" src="V.js" type="text/javascript"></script>
  <script  src="js/validarUsuario.js"></script>
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
?>

<div class="col-xs-10 col-sm-9 col-md-9 col-lg-8  col-md-offset-1 " style="">
	<div class="row">

   <form name="computadora" action="RegistroUsuarioo.php" method="POST" autocomplete="off" onsubmit="comenzar();">
		<br>
		<div class="panel panel-default panel-table">
			<div class="panel-heading"><h4 style="color: black" align="center" >Registrar Usuario</h4></div>
			
			<div class="panel-body">
				<br>
				<div class=" form-group col-md-4">
					Usuario:
					<input type="text" name="Usuario" id="Usuario" class="form-control" placeholder="Ingrese Usuario"     maxlength="50" row="10" autofocus   required title="Ingrese el Usuario">
					
				</div>
				<div class="form-group col-md-4">
					Nombres y Apellido:
					<input type="text" name="NombreyApellido" id="NombreyApellido" class="form-control" placeholder="Ingrese Nombre y Apellido" maxlength="80" title="Ingrese Nombre y Apellido"  pattern="[a-zA-Z]+" required>
					
				</div>
				<div class="form-group col-md-4">
					Cedula:
					<input type="text" name="Cedula" id="Cedula" required class="form-control" placeholder="Ingrese Cedula" maxlength="16" title="Ingrese Cedula" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
				</div>
				<div>
					<div class="form-group col-md-12">
						Correo:
						<input type="text" name="Correo" id="Correo" min="0" maxlength="50" class="form-control" placeholder="@ejemplo.com"  required>
					</div>
					<div class="form-group col-md-12">
						Tipo de Usuario:
						<select class="form-control" id="tipousuario" name="tipousuario">
							<option selected>Selecione</option>
							<option value="1">Administrador</option>
							<option value="2">Tecnico</option>
						  
						      
						</select>
						
					</div>
					
				     
					
					<div class="form-group col-md-6">
						Contraseña:
						<input type="password" class="form-control" maxlength="15"  placeholder="Ingrese Contraseña" id="pass" name="pass" title="la contraseña debe tener entre 5 a 15 caracteres" required >
					</div>
					<div class="form-group col-md-6">
						Confirme Contraseña:
						<input type="password" class="form-control" maxlength="15"  placeholder="Ingrese Contraseña" id="rpass" name="rpass" title="la contraseña debe tener entre 5 a 15 caracteres" required >
						
					</div>
					<div class="modal-footer" align="center">
           	<button type="submit"  class="btn btn-success" value="Registrar" id="Registrar" name="Registrar" >Registrar <span class="glyphicon glyphicon-user"></span></button>
           	<button type="reset" class="btn btn-warning">Borrar</button>
           	<a href="Usuario.php"><button type="button" class="btn btn-danger">Cerrar</button></a> 
                     	
           </div>
				</div>
			</div>
		</div>
		
	</form>
	
</div>


<?php
include 'footer.php';
?>
