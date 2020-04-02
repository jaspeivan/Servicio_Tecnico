<!--Formulario de registro de la computadora-->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
	 <link rel="icon" type="" href="img/logo_mppc.JPG">
  <title>Sistema del Servicio T&eacute;nico</title>
  <link rel="stylesheet" type="text/css" media="screen" href="css/estilos2.css" />

  <script  src="js/validarformulario.js"></script>
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
<div id="hola">
<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 col-md-offset-1">
  <div class="row">
	<form action="RegistroComputadoraa.php" name="computadora" method="POST" autocomplete="off" onsubmit="comenzar();">
		<br>
		<div class="panel panel-default panel-table">
			<div class="panel-heading" ><h4 style="color: black" align="center">Registro De Computadora</h4></div>

			<div class="panel-body">
				<br>
				<div class=" form-group col-md-3">
					Seleciones Trabajador:
					 <select name="id_empleado" id="id_empleado" class="form-control">
            <?php
             include 'connect.php';
            ?>
            <?php
            $tra="SELECT * FROM empleado";
            $ress=mysqli_query($con,$tra);
            while($mostrar=mysqli_fetch_array($ress)){
            
            ?>
             
             <option value=<?php echo $mostrar['id_empleado'];?>><?php echo $mostrar['Nombre'];echo" "; echo $mostrar['Apellido'];  ?></option>
             
           
            <?php
          }
          ?>
           </select>
         </div>
         <?php
         include 'connect.php';
       
         ?>
					<div class="form-group col-md-3">
						Fecha:
						<input class="form-control" id="Fecha"  name="Fecha" required readonly value="<?php echo date("d/m/Y") ?>">
					</div>
			<div class="form-group col-md-3">
		   <label for="Dep">Departamento:</label>
            <select id="Dep" name="Dep" class="form-control" required>
            	<?php 
            	include 'connect.php';
            	?>
            	<?php
                 $De="SELECT * FROM departamento";
                 $re=mysqli_query($con,$De);
                 while ($mostrar=mysqli_fetch_array($re)) {
                 	
            	?>
            	<option value=<?php echo $mostrar['id_dep'];?>><?php echo $mostrar['Departamento']; ?></option>

            	<?php
                 }
            	?>
            	</select>
					</div>
				
					
			<div class="form-group col-md-3">
		   <label for="tip">Tipo de falla:</label>
            <select id="tip" name="tip" class="form-control " required >
            	<?php 
            	include 'connect.php';
            	?>
            	<?php
                 $ti="SELECT * FROM tipofalla";
                 $re=mysqli_query($con,$ti);
                 while ($mostrar=mysqli_fetch_array($re)) {
                 	
            	?>
            	<option value=<?php echo $mostrar['id_tipof'];?>><?php echo $mostrar['tipodefalla']; ?></option>

            	<?php
                 }
            	?>
            
            	 </select>
            	
					</div>



			<div class="form-group col-md-12">
		Descripci&oacute;n:
   
         <textarea resize="none"  rows="5"  id="Descripcion" name="Descripcion" placeholder="" placeholder="Ingrese Remitente" maxlength="700" class="form-control" required  title="Ingrese la Observación" ></textarea>
						
		</div>
		<div class="form-group col-md-4">
           Codigo:
           
           <?php
          include 'connect.php';

          $c="SELECT Codigo from computadora order by Codigo desc";
          $re=mysqli_query($con,$c);

          if($r=mysqli_fetch_array($re)){
          ?>
         
        <input   type="text" id="Codigo" name="Codigo" class="form-control"  maxlength="800"  readonly=""  required placeholder="Ingrese Codigo de PC" value=<?php echo $r['Codigo']+1;?>>
          <?php
}else{
      
      ?>

        <input   type="text" id="Codigo" name="Codigo" class="form-control"  maxlength="800"  required placeholder="Ingrese Codigo de PC" value=<?php echo $r['Codigo']+1;?>>

        <?php
}
        ?>
        
		</div>

         <div class="form-group col-md-4">
		   <label for="tip">Técnico</label>
       <select id="tecnico" name="tecnico" class="form-control" readonly>
       <?php
    
         include 'connect.php';
         $tec="SELECT * FROM login";
         $res=mysqli_query($con,$tec);
        if($mo=mysqli_fetch_array($res)){
       ?>  
         <option value=<?php echo $_SESSION['id'];?>><?php echo  $_SESSION['NombreyApellido'];?></option>
         <?php
      }    


?>
</select>
					</div>
 
<br>  
			<div class="modal-footer"  align="center">
           	<input type="submit"  class="btn btn-success" value="Registrar" id="Registrar" name="Registrar"></input>
      <button type="reset" class="btn btn-warning">Borrar</button>
           	<a href="Computadora.php"><button type="button" class="btn btn-danger">Cerrar</button></a> 
                     	
           </div>
				</div>
			</div>
		
   <?php

   ?>
	</form>
	</div>
</div>
</div>
</div>

<br>
  </body>
</div>
<?php
require 'footer.php';
?>

