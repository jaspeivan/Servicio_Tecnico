<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	 <link rel="icon" type="" href="img/logo_mppc.JPG">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sistema del Servicio T&eacute;nico</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/estilos2.css" />
	<script  src="js/validarformulario.js"></script>
</head>
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

<body>
	<section class="col-xs-10 col-sm-9 col-md-9 col-lg-9 col-md-offset-1">
		<div class="row">
			<form name="computadora" action="RegistrodeTrabajadoress.php" method="POST" autocomplete="off" onsubmit="comenzar();">
				<br>
				<div class="panel panel-default panel-table">
					<div class="panel-heading"><h4 style="color:black; text-align:center; ">Registro de Trabajadores</h4></div>

					<div class="panel-body">
						<br>
						<div class="form-group col-md-4">
							Nombres:
							 <input  type="text" id="Nombre" name="Nombre" class="form-control"  placeholder="Ingrese Nombres" maxlength="15"  pattern="[a-zA-Z]+" title="Ingrese solo letras" required>
						</div>

				<div class="form-group col-md-4">
					Apellido:
					<input  type="text" id="Apellido" name="Apellido" class="form-control"  placeholder="Ingrese Apellidos" maxlength="50" pattern="[a-zA-Z]+" title="Ingrese solo letras" required >
					
				</div>
				<div class="form-group col-md-3">
					Cedula:
					<input type="text" class="form-control" id="Cedula" placeholder="Cedula" required name="Cedula" maxlength="10"  pattern="[0-9]+" min="7" title="Ingrese la cedula correctamente" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">
				</div>
				<div class="form-group col-md-6">
                       Correo:
                       <input type="email" class="form-control" id="Correo"  name="Correo"placeholder="Ingrese el Correo" required   title="Ingrese el Correo correctamente"  >
					</div>
					
	             <div class="form-group col-md-6">
					Direccion:
					<input type="text" class="form-control" name="Direccion" id="Direccion"  placeholder="Ingrese su Direccion" maxlength="80"  min="80" title="Ingrese su Direccion Correctamente" >
					</div>

					<div class="form-group col-md-4">
				   Telefono:
				   <input type="text"  class="form-control"  name="Telefono" id="Telefono"  placeholder="Ingrese su Telefono" maxlength="12"pattern="[0-9]+" min="12" title="Ingrese su Telefono Correctamente" >
				</div>
						<div class="form-group col-md-4">
                    Genero:
                    <select name="Genero" id="Genero" class="form-control">
                    	<option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    </select>
				</div>
					
					
					<div class="modal-footer"  align="center" >
							
           	<input type="submit"  class="btn btn-success" value="Registrar" id="Registrar" name="Registrar"></input>
      <button type="reset" class="btn btn-warning">Borrar</button>
           	<a href="Inicio.php"><button type="button" class="btn btn-danger">Cerrar</button></a> 
                     	
           </div>
				</div>
			</div>
			</form>
		</div>
		</div>
	</section>
</body>
<?php

require 'footer.php';
?>
</html>