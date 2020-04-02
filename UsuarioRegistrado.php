<!-- esta tabla es para el Usuario-->
<form id="formrecibir" action="ActualizarUsuario.php" method="POST">
 <div class="modal fade" id="ActualizarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
          <div class="modal-content"  >
            <div class="modal-header" style="background: #BF312F; color:#fff;" >
              <button type="button" class="close" data-dismiss="modal" style="color:#fff" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
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


	 $por_pagina=8;

	 if (isset($_GET['pagina'])) {

	 	$pagina=$_GET['pagina'];

	 	}else{

	 		$pagina = 1;
	 	}
	 

$empieza=($pagina-1)*$por_pagina;

$sql=("SELECT * FROM login  order by id asc limit $empieza,$por_pagina");
$re=mysqli_query($con,$sql);

echo "<br><div class='col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1'>
           
		  <div class='panel panel-default panel-table'>
			<div class='panel-heading'>
			  <div class='row'>
				<div class='col col-xs-6'>
				<br>
				  <h3 class='panel-title' style='color:black'; font-size: 18px; font:bold; '>Control De Usuarios</h3>
				</div>
				<div class='col col-xs-6 text-right'>";
				?>
               <a href="RegistroUsuario.php" class="btn btn-success"> Nuevos Usuarios  <em class="glyphicon glyphicon-user" ></em></a>
				  <?php
				echo "</div>
			  </div>
			</div>
			<div class='panel-body'>
			
			  <table class='table table-striped table-bordered table-list'>
				<thead>
				  <tr style='background: #111; color:#fff'>
					
					  <th style='text-align:center;'>Editar<i class='glyphicon glyphicon-upload'></i</th>
						<th style='text-align:center;'>ID</th>
						<th style='text-align:center;'>Usuario</th>
						<th style='text-align:center;'>Nombre Y Apellido</th>
					  <th style='text-align:center;'>Cedula</th>
					  <th style='text-align:center;'>Correo</th>
					  <th style='text-align:center;'>Tipo de Usuario</th>
					  <th style='text-align:center;'>Estado</th>
					
				  </tr> 
				
				<tbody>";
				$in="SELECT login.id,login.Usuario,login.NombreyApellido,login.Cedula,login.correo,login.password,tipo_usuario.tipodeusuario,estado.Estado from login INNER JOIN tipo_usuario on login.id_tipousuario=tipo_usuario.id_tipousuario INNER JOIN estado on login.id_estado=estado.id_estado";


$re=mysqli_query($con,$in);

				while ($reg=mysqli_fetch_array($re))
				{


$datosarray[] = $reg;

echo '<tr>
	  
	  <td align="center">
	 
	
	 <a class="btn btn-success"onClick="EditarUsuario('.$reg[0].')"><em class="glyphicon glyphicon-upload" style="font-size:15px;color:white"></em></a>	 
	  </td>
	  <td align="center" class="hidden-xs">'.$reg[0].'</td><td align="center">'.$reg[1].'</td><td align="center">'.$reg[2].'</td><td align="center">'.$reg[3].'</td><td align="center">'.$reg[4].'</td><td align="center">'.$reg[6].'</td><td align="center">'.$reg[7].'</td></tr>';
	 
	


}

echo "    </tbody>
		  </table>




</div>";
$sql=("SELECT * FROM login  order by id asc ");

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
                     <li><a class='page-link' href='usuario.php?pagina=1' tabindex='-1'>Primera</a></li>";
                     for ($i=1; $i<=$total_paginas; $i++) { 

                     	echo "<li><a href='usuario.php?pagina=".$i."'>".$i."</a></li>";
                     }
                     	 echo "<li><a class='page-link' href='usuario.php?pagina=$total_paginas' tabindex='-1'>Ultima</a></li>";
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

