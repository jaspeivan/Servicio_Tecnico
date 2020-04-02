<!-- Formulario  para buscar -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 
   <link rel="icon" type="" href="img/logo_mppc.JPG">
  <title>Sistema Del Servicio Técnico</title>
  
    
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
  <br>
  <div class="col-xs-8 col-sm-8 col-md-7 col-lg-7  col-xs-offset-3">
<div class='panel panel-default panel'>
              <div class='panel-heading'>
                <div class='row'>
                  <div class='col col-xs-6'>
                   <?php echo "<h3 class='panel-title' style='color:black; font-size: 18px; font:bold;'>Buscar Computadoras</h3>";?>
                  </div>
                  <div class='col col-xs-6 text-right'>
                  </div> 
                </div>
              </div>
              <div class='panel-body' align="center">
<?php
//include 'validaciones/ValidarBuscador.php';
?>
<form action="Buscarcom.php" class="form-inline" method="POST"  onsubmit="return ValidarBuscador();"> 

		<div class="form-group" align="center">
		<h4>Buscar Computadoras: </h4>
   
		<input type="text" class="form-control" name="Cedula"  id="Cedula"  placeholder="Cedula" maxlength="100"  title="Introduzca la Cedula" >

  <br><br>
    <input type="submit" class="btn btn-success" id="Buscar" name="Buscar" value="Buscar">
		</div>
    

	</form>
</div>
</div>
</div>


<br><br><br><br><br><br>

<?php

include 'footer.php';
?>

</html>