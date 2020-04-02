<?php

include 'connect.php';

					session_start();
					$id_registropc=$_POST ['codigo'];
					
					$ed="SELECT computadora.id_registropc, computadora.Fecha , computadora.Descripcion , computadora.Codigo , departamento.Departamento , tipofalla.tipodefalla , estatus.Estatus, login.NombreyApellido,empleado.Nombre,empleado.Apellido,empleado.Cedula FROM computadora INNER JOIN departamento on computadora.id_dep=departamento.id_dep INNER JOIN tipofalla on computadora.id_tipof=tipofalla.id_tipof INNER JOIN estatus on computadora.id_estatus=estatus.id_estatus INNER JOIN login on computadora.id=login.id INNER JOIN empleado on computadora.id_empleado=empleado.id_empleado WHERE id_registropc='$id_registropc'";


					$res=mysqli_query($con,$ed);

				

					while ($reg=mysqli_fetch_array($res))
					{
						$datosarray[] = $reg;
						
						//id
						echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>ID:</label>
							<input type='text' class='form-control'  value='$reg[0]'' name='id_registropc' readonly='readonly' >
						 </div>
					     </div>";

						 echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Trabajador:</label>";
;
            	      
            	include 'connect.php';
                $dep="SELECT * FROM empleado";
                $re=mysqli_query($con,$dep);
				echo "<select id='id_empleado' name='id_empleado' value='id_empleado'  class='form-control' readonly='readonly' >";
                while($mostrar=mysqli_fetch_array($re)){
                   $sel=0;
                   if ($mostrar[1]==$reg[8]) {
                    $sel='selected';
                   }else{
                    $sel='';
                   }
                	echo "<option value=".$mostrar['id_empleado']." ".$sel. ">".$reg["Nombre"]. " " .$reg["Apellido"];"</option>";
                }
                	            	
            	echo "</select>
					</div>

                   </div>";

                 // Fecha
                 echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Fecha:</label>
							<input type='date' class='form-control'  value='$reg[1]' name='Fecha' >
						 </div>
					     </div>";
					     


               
                   echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Departamento:</label>";

            	      
            	include 'connect.php';
                $dep="SELECT * FROM departamento";
                $re=mysqli_query($con,$dep);
				echo "<select id='id_dep' name='id_dep' value='id_dep' class='form-control'>";
               while($mostrar=mysqli_fetch_array($re)){
                   $sel=0;
                   if ($mostrar[1]==$reg[4]) {
                   	$sel='selected';
                   }else{
                   	$sel='';
                   }

                	 echo "<option value=".$mostrar["id_dep"]." ".$sel. ">".$mostrar["Departamento"]."</option>";
                }  

            	echo "</select>
					</div>

                   </div>";



                        echo "<div class='col-sm-12'> 
						<div class='form-group'> 
						<label for='tip'>Tipo de falla:</label>";
            
            		 
              include 'connect.php';

               $tip="SELECT * FROM tipofalla";
               $re=mysqli_query($con,$tip);
               echo "<select id='id_tipof' name='id_tipof' values=id_tipof class='form-control'>";
               while($mostrar=mysqli_fetch_array($re)){
                  $sel=0;
                  if ($mostrar[1]==$reg[5]) {
                  	$sel='selected';
                  }else{
                  	$sel=' ';
                  }
            
            	echo "<option value=".$mostrar['id_tipof']." ".$sel.">".$mostrar['tipodefalla']."</option>";
            }
			echo "</select>
			</div>
			</div>";

             
					

						echo "<div class='col-sm-12'>
						<div class='form-group'> 
						<label>Descripcion</label>
						<textarea resize='none'   name='Descripcion' rows='5'  id='Descripcion'   placeholder='Ingrese Descripcion' maxlength='700' class='form-control'  title='Ingrese la Observación' required>$reg[2]</textarea>
                           </div>
                           </div>";

                           echo "<div class='col-sm-2'>
						<div class='form-group'> 
						<label>Codigo</label>
						<input type='text' value='$reg[3]' id='Codigo' name='Codigo' class='form-control' name='Codigo' placeholder='Ingrese El Codigo' maxlength='50' readonly >
						</div>
						</div>";
                         
                         echo "<div class='col-sm-3'>
                         <div class='form-group'>
                         <label>Fecha Actualizada</label>
                         <input type='date' class='form-control'  name='FechaSalida' id='FechaSalida'>
                            </div>

                         </div>";
                       
                        echo "<div class='col-sm-3'>
		   <label for='te'>Técnico</label>";
             
         include 'connect.php';
         $tec="SELECT * FROM login";
         $res=mysqli_query($con,$tec);
          echo "<select id='id' name='id' class='form-control' readonly>";
        while($mo=mysqli_fetch_array($res)){
        
       echo "<option value=". $_SESSION['id'].">".$_SESSION['NombreyApellido']."</option>"; 
         
      }    


echo "</select>
					</div>";

						echo "<div class='col-sm-3'>
						<div class='form-group'> 
						<label>Estatus:</label>
           <select name='id_estatus' id='id_estatus' class='form-control'>
             <option value='1'>$reg[6]</option>
             <option value='2'>Reparando</option>
             <option value='3'>Listo</option>
           </select>
           </div>
           </div>";

					}
					

					?>