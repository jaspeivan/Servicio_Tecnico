<!-- modal para reporte-->
<link rel="icon" type="" href="img/logo_mppc.JPG">
<title>Sistema Del Servicio Técnico</title>
<?php
 include 'connect.php';
 $id_estatus=$_POST['id_estatus'];
 $Fecha=$_POST['Fecha'];
 $FechaSalida=$_POST['FechaSalida'];
 $id_dep=$_POST['id_dep'];
 $id_tipof=$_POST['id_tipof'];
 $id=$_POST['id'];
 
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
<!---<div style="position: relative; right: 30px; width:-600px; margin: -55px; padding:20 5px; top:30px;">--->
  <section class="col-xs-12 col-sm-12 col-md-12 col-lg-14 ">
<?php
echo "
<br><div class=''>

<div class='panel panel-default panel-table'>
<div class='panel-heading'>
<div class='row'>
<div class='col col-xs-6'>
<br>
<h3 class='panel-title' style='color:black'; font-size:15px;
font:bold;'>Reporte Generado</h3>
</div>
<div class='col col-xs-6 text-right'>";
?>
<a href="Reporte.php" class="btn btn-success"> Regresar  <em class="" ></em></a>
<?php

echo "</div>
        </div>
      </div>
      <div class='panel-body'>
      <div class=''>
        <table class='table table-striped table-bordered table-list'>
        <thead >
          <tr style='background: #111; color:#fff; font-size:8px;'>
          
                        <th style='text-align:center;'>ID</th>
                        <th style='text-align:center;'>Nombres</th>
                        <th style='text-align:center;'>Apellido</th>
                        <th style='text-align:center;'>Cedula</th>
                        <th style='text-align:center;'>Departamentos</th>
                        <th style='text-align:center;'>Tipos de Falla</th>
                        <th style='text-align:center;'>Codigo</th>
                        <th style='text-align:center;'>Descripcion</th>
                        <th style='text-align:center;'>Fecha Entrega</th>
                        <th style='text-align:center;'>Fecha Salida</th>
                        <th style='text-align:center;'>Técnico</th>
                        <th style='text-align:center;'>Estatus</th>
                     
                        

                        </tr>
                        <tbody>";
                
                    
                   
                         /*if ($id_estatus==4 and $id_dep==30 and $id_tipof==30) {
                           echo  $rep="SELECT registro.id_registropc , registro.Nombres , registro.Apellido , registro.Cedula , registro.Fecha , registro.Descripcion , registro.Codigo , registro.FechaSalida, departamento.Departamento , tipofalla.tipodefalla , estatus.Estatus FROM registro INNER JOIN departamento on registro.id_dep=departamento.id_dep INNER JOIN tipofalla on registro.id_tipof=tipofalla.id_tipof INNER JOIN estatus on registro.id_estatus=estatus.id_estatus"; 
                          }else{
                        */
                            /*esta es la consulta que va ha buscar por cada departamento, tipo de falla entre otra cosa, con la opciones que le de el usuarios*/
                           $rep="SELECT computadora.id_registropc, computadora.Fecha , computadora.Descripcion , computadora.Codigo ,computadora.FechaSalida, departamento.Departamento , tipofalla.tipodefalla , estatus.Estatus, login.NombreyApellido,empleado.Nombre,empleado.Apellido,empleado.Cedula FROM computadora INNER JOIN departamento on computadora.id_dep=departamento.id_dep INNER JOIN tipofalla on computadora.id_tipof=tipofalla.id_tipof INNER JOIN estatus on computadora.id_estatus=estatus.id_estatus INNER JOIN login on computadora.id=login.id INNER JOIN empleado on computadora.id_empleado=empleado.id_empleado WHERE (computadora.id_estatus='$id_estatus' or '$id_estatus'='t') and (computadora.id_dep='$id_dep' or '$id_dep'='t')and (computadora.id_tipof='$id_tipof' or '$id_tipof'='t') and(computadora.id='$id' or '$id'='t') or (computadora.id_estatus='$id_estatus') or (computadora.id_dep='$id_dep') or (computadora.id_tipof='$id_tipof') or (computadora.id='$id') ";
                   //  }
                   	
                   
                   
                      $re=mysqli_query($con,$rep);
                       
                        while ($reg=mysqli_fetch_array($re)) {
                        
                        $datosarray[]=$reg;

                        echo '<tr>
                      <td align="center" class="hidden-xs">'.$reg['id_registropc'].'</td><td align="center">'.$reg['Nombre'].'</td><td align="center">'.$reg['Apellido'].'</td><td align="center">'.$reg['Cedula'].'</td><td align="center">'.$reg['Departamento'].'</td><td align="center">'.$reg['tipodefalla'].'</td><td align="center">'.$reg['Codigo'].'</td><td align="center">'.$reg['Descripcion'].'</td><td align="center">'.$reg['Fecha'].'</td><td align="center">'.$reg['FechaSalida'].'</td> <td align="center">'.$reg['NombreyApellido'].'</td><td align="center">'.$reg['Estatus'].'</td>';
  
                          
                        }
                         echo "</tbody>
                              </table>

</div>
                            </div>";
                        echo "</div>
                          </div>
                          </div>
                       </div>
                    </div>
               </div>";
?>
</section>
<?php
echo "<br>";echo "<br>";
include 'footer.php';
?>

