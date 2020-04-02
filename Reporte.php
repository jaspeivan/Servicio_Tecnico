<!--formulario para reporte-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="" href="img/logo_mppc.JPG">
	<title>Sistema Del Servicio Tecnico</title>
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


<div class="col-sm-9 col-sm-offset-1">
	<br>
	<div class="panel panel-default panel-table">
		<div class="panel-heading">
			<div class="row">
				<div class="col col-xs-12">
					<h3 class="panel-title" align="center" style="color: black; font-size: 18px;">Reporte</h3>
				</div>
			</div>
		</div>
		           
                  <div class="panel-body">
                  	<div class="col-lg-13">

                  		<form action="MostrarReporte.php" method="POST" autocomplete="off">
                                <div class="col-md-6" >
                              <div class="form-group">
                                  <label>Departamentos</label>
                                   <select id="id_dep" name="id_dep" class="form-control">
                                    <option value="t">Todo</option>
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
                              </div>
                                
                                   <div class="col-md-6" >
                              <div class="form-group">
                                  <label>Tipos De Fallas</label>
                                  <select id="id_tipof" name="id_tipof" class="form-control"> 
                                     <option value="t">Todo</option>
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
                              </div>
                                <br>
                                 <div class="col-md-6" >
                              <div class="form-group">
                                  <label>Usuarios</label>
                                  <select id="id" name="id" class="form-control">
                                  <option value='t'>Todo</option>
                                  <?php 
                                  include 'connect.php';
                                  ?>
                                  <?php
                                  $usu="SELECT * FROM login";
                                  $re=mysqli_query($con,$usu);
                                   while($mostrar=mysqli_fetch_array($re)){

                                   

                                  ?>
                                  <option value=<?php echo $mostrar['id'];?>><?php echo $mostrar['NombreyApellido'];?></option>
                                  <?php
                                }
                                ?>
                              </select>
                                </div>
                              </div>
                                <br>
                               <div class="col-md-6" >
                              <div class="form-group">
                               
                              <label>Estatus:</label>

                               <select name='id_estatus' id='id_estatus' class='form-control' >
                                 <option  value="t">Todo</option>
                                 <option value='1'>En Espera</option>
                                  <option value='2'>Reparando</option>
                                   <option value='3'>Listo</option>
                                   
                                   </select>
                              </div>
                              </div>
                        

                  		 <div class="col-lg-8" align="center">
                              <div class="form-group" >
                                <div class="form-inline">
                              	<label>Rango de Fechas:</label>
                                <input type="date" name="Fecha" id="Fecha" class="form-control" placeholder="Desde" >
                                <input type="date" name="FechaSalida" id="FechaSalida" class="form-control" placeholder="Hasta">
                                </div>
                              </div>
                               </div>
                               <div class="col-md-12" align="center"> 
					<input type="submit"  class="btn btn-success"  value="Generar"></input>
				</div>

                  		</form>
                  	</div>
                  </div>


	</div>
</div>

</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>

<?php 

include 'footer.php';
?>
</html>