<!-- tabla para buscar -->
<link rel="icon" type="" href="img/logo_mppc.JPG">
<title>Sistema Del Servicio Técnico</title>
<?php 
include 'connect.php';
if(isset($_POST['Buscar'])){
$Cedula=mysqli_real_escape_string($con,$_POST['Cedula']);

}

//include 'validaciones/ValidarBuscador.php';
?>
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
<div style="position: relative; right: 35x;">
<?php
echo "<br><div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0' >
      
      <div class='panel panel-default panel-table'>
      <div class='panel-heading '>
        <div class='row'>
        <div class='col col-xs-6'>
        <br>
          <h3 class='panel-title' style='color:black'; font-size: 18px; font:bold;'>Busqueda</h3>
        </div>
        <div class='col col-xs-6 text-right'>";
    ?>
      <a href="buscarComputadora.php" class="btn btn-success"> Regresar  <em class="" ></em></a>
        <?php
        echo "</div>
        </div>
      </div>
      <div class='panel-body'>
      <div class='col-lg-14'>
        <table class='table table-striped table-bordered table-list'>
        <thead class=''>
          <tr style='background: #111; color:#fff; font-size: 8px;'>
          
                      
                        <th style='text-align:center;'>ID</th>
                        <th style='text-align:center;'>Nombres</th>
                        <th style='text-align:center;'>Apellido</th>
                        <th style='text-align:center;'>Cedula</th>
                        <th style='text-align:center;'>Departamento</th>
                        <th style='text-align:center;'>Tipo de Falla</th>
                        <th style='text-align:center;'>Codigo</th>
                        <th style='text-align:center;'>Descipcion</th>
                        <th style='text-align:center;'>Fecha</th>
                        <th style='text-align:center;'>Técnico</th>
                        <th style='text-align:center;'>Estatus</th>
                        

                        
          
          </tr> 
        </div>
        </div>
        <tbody>";
          // la consulta que se va a encargar de buscar mediante Cedula
      $ins="SELECT computadora.id_registropc, computadora.Fecha , computadora.Descripcion , computadora.Codigo , departamento.Departamento , tipofalla.tipodefalla , estatus.Estatus, login.NombreyApellido,empleado.Nombre,empleado.Apellido,empleado.Cedula FROM computadora INNER JOIN departamento on computadora.id_dep=departamento.id_dep INNER JOIN tipofalla on computadora.id_tipof=tipofalla.id_tipof INNER JOIN estatus on computadora.id_estatus=estatus.id_estatus INNER JOIN login on computadora.id=login.id INNER JOIN empleado on computadora.id_empleado=empleado.id_empleado WHERE empleado.Cedula='$Cedula'";
         

$re=mysqli_query($con,$ins);


        while ($reg=mysqli_fetch_array($re))
        {
        

  echo '<tr style="";>
    
    

    <td align="center" class="hidden-xs">'.$reg['id_registropc'].'</td><td align="center">'.$reg['Nombre'].'</td><td align="center">'.$reg['Apellido'].'</td><td align="center">'.$reg['Cedula'].'</td><td align="center">'.$reg['Departamento'].'</td><td align="center">'.$reg['tipodefalla'].'</td><td align="center">'.$reg['Codigo'].'</td><td align="center">'.$reg['Descripcion'].'</td><td align="center">'.$reg['Fecha'].'</td><td align="center">'.$reg['NombreyApellido'].'</td><td align="center">'.$reg['Estatus'].'</td>' ;
  
}
echo "</tbody>
      </table>

</div>

</div>";


   echo "</div>
         </div>
          </div>
            </div>
</div>";


include 'footer.php';
     ?>
  
