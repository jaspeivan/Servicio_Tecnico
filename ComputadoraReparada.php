<!-- MODAL Computadora Reparadada--->
<form id="formrecibir" action="ActualizarReparando.php" method="POST">
 <div class="modal fade" id="ActualizarReparando" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
          <div class="modal-content"  >
            <div class="modal-header" style="background: #BF312F; color:#fff;" >
              <button type="button" class="close" data-dismiss="modal" style="color:#fff" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Editar Computadora</h4>
            </div>
            <div class="modal-body" id="datosAqui3">
            </div>

             <div class="modal-footer">
          <button type="submit"  class="btn btn-success">Guardar</button>
          <button type="button"  class="btn btn-danger" data-dismiss="modal">Cerrar</button></a> 
        </div>
          </div>
       </div>
   </div>  
</form>

<?php

require("connect.php");


   $por_pagina=5;

   if (isset($_GET['pagina'])) {

    $pagina=$_GET['pagina'];

    }else{

      $pagina = 1;
    }
   

$empieza=($pagina-1)*$por_pagina;
?>
<section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0">
<?php
echo  "<br>
<div class='' >
      
      <div class='panel panel-default panel-table'>
      <div class='panel-heading'>
        <div class='row'>
        <div class='col col-xs-6'>
        <br>
          <h3 class='panel-title' style='color:black'; font-size: 18px; font:bold;'>Lista de Computadoras en Reparacion</h3>
        </div>
        <div class='col col-xs-6 text-right'>";
  

        echo "</div>
        </div>
      </div>

      <div class='panel-body'>
      
        <table class='table table-striped table-bordered table-list'>
        <thead>
          <tr style='background: #111; color:#fff;font-size: 9px;'>
          
                      <th style='text-align:center;'>Editar<i class='glyphicon glyphicon-upload'></i</th>
                        <th style='text-align:center;'>ID</th>
                        <th style='text-align:center;'>Nombres</th>
                        <th style='text-align:center;'>Apellido</th>
                        <th style='text-align:center;'>Cedula</th>
                        <th style='text-align:center;'>Departamento</th>
                         <th style='text-align:center;'>Tipo de Falla</th>
                        <th style='text-align:center;'>Codigo</th>
                        <th style='text-align:center;'>Descipcion</th>
                        <th style='text-align:center;'>Fecha Entrada</th>
                        <th style='text-align:center;'>Fecha Actualizada</th>
                          <th style='text-align:center;'>Técnico</th>
                        <th style='text-align:center;'>Estatus</th>
                        
          
          </tr> 
        
        <tbody>";
          
              /*Esta va hacer la consulta que me va ha traer de la base de datos*/
     $ins="SELECT computadora.id_registropc, computadora.Fecha , computadora.FechaSalida, computadora.Descripcion , computadora.Codigo , departamento.Departamento , tipofalla.tipodefalla , estatus.Estatus, login.NombreyApellido,empleado.Nombre,empleado.Apellido,empleado.Cedula FROM computadora INNER JOIN departamento on computadora.id_dep=departamento.id_dep INNER JOIN tipofalla on computadora.id_tipof=tipofalla.id_tipof INNER JOIN estatus on computadora.id_estatus=estatus.id_estatus INNER JOIN login on computadora.id=login.id INNER JOIN empleado on computadora.id_empleado=empleado.id_empleado WHERE estatus.id_estatus='2' limit $empieza,$por_pagina";
         

$re=mysqli_query($con,$ins);


        while ($reg=mysqli_fetch_array($re))
        {
         

  echo '<tr>
     
    <td align="center">
   
   <a class="btn btn-success"onClick="EditarComputadoraReparando('.$reg[0].')"><em class="glyphicon glyphicon-upload" style="font-size:15px;color:white"></em></a>  
    </td>
    

    <td align="center" class="hidden-xs">'.$reg['id_registropc'].'</td><td align="center">'.$reg['Nombre'].'</td><td align="center">'.$reg['Apellido'].'</td><td align="center">'.$reg['Cedula'].'</td><td align="center">'.$reg['Departamento'].'</td><td align="center">'.$reg['tipodefalla'].'</td><td align="center">'.$reg['Codigo'].'</td><td align="center">'.$reg['Descripcion'].'</td><td align="center">'.$reg['Fecha'].'</td><td align="center">'.$reg['FechaSalida'].'</td><td align="center">'.$reg['NombreyApellido'].'</td><td align="center">'.$reg['Estatus'].'</td>';

    
   
   

  
}
echo "</tbody>
      </table>


</div>";

$sql=("SELECT * FROM computadora  order by id_registropc asc");

 $resultado = mysqli_query($con,$sql);


   $total_registros= mysqli_num_rows($resultado);


   $total_paginas=ceil($total_registros/$por_pagina);


   echo "    </tbody>
                </table>
            
              </div>
              <div class='panel-footer'>
                <div class='row'>
                  <div class='col col-xs-4'>Página " .$pagina." de " .$total_paginas."
                  </div>
                  <div class='col col-xs-8'>
                    <ul class='pagination hidden-xs pull-right'>            
                     <li><a class='page-link' href='Computadora1.php?pagina=1' tabindex='-1'>Primera</a></li>";
                     for ($i=1; $i<=$total_paginas; $i++) { 

                      echo "<li><a href='Computadora1.php?pagina=".$i."'>".$i."</a></li>";
                     }
                       echo "<li><a class='page-link' href='Computadora1.php?pagina=$total_paginas' tabindex='-1'>Ultima</a></li>";
                echo "
                    </ul>
                    <ul class='pagination visible-xs pull-right'>
                        <li><a href='#'>«</a></li>
                        <li><a href='#'>»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            

           
</div>";



     ?>
  </section>
