<?php

include 'connect.php';

					
					$id_registropc=$_POST ['codigo'];
					
					$ed="SELECT * FROM registro WHERE id_registropc='$id_registropc'";


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
						// Nombres
                        
					     echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Nombres:</label>
							<input type='text' class='form-control'  value='$reg[3]'' name='Nombres' >
						 </div>
					     </div>";

					     //Apellido
					     echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label> Apellido:</label>
							<input type='text' class='form-control'  value='$reg[4]' name='Apellido' >
						 </div>
					     </div>";
					     //cedula
					      echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Cedula:</label>
							<input type='text' class='form-control'  value='$reg[5]' name='Cedula' >
						 </div>
					     </div>";
                 // Fecha
                 echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Fecha:</label>
							<input type='date' class='form-control'  value='$reg[6]' name='Fecha' >
						 </div>
					     </div>";

                   echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Departamento:</label>
							<select id='id_dep' name='id_dep' value='id_dep' class='form-control'>
            	<option value='1'>Recurso Humano</option>
                <option value='2'>Administracion</option>
            	<option value='3'>Contabilidad</option>
            	<option value='4'>Tesoreria</option>
            	<option value='5'>Presupuesto</option>
            	<option value='6'>Asistente Ejecutivo</option>
            	<option value='7'>Bienes Nacionales</option>
            	<option value='8'>Bienestar Social</option>
            	<option value='9'>Gestion Internas</option>
							</select>
							</div>
							</div>";
					   
					    echo "<div class='col-sm-12'> 
						<div class='form-group'> 
						<label for='tip'>Tipo de falla:</label>
            <select id='id_tipof' name='id_tipof' values=id_tipof class='form-control'>
            	<option value='1'>Problemas de arranque</option>
            	<option value='2'>Problemas intermitentes</option>
            	<option value='3'>Problemas de rendimiento</option>
            	<option value='4'>Problemas de incompatibilidad</option>
            	<option value='5'>Problema con el Monitor</option>
                <option value='6'>Problemas con el ratón y el teclado</option>
            	<option value='7'>problema con el USB</option>
            	<option value='8'>problema con el dico duro</option>
            	<option value='9'>problema con la Fuente de Poder</option>
            	<option value='10'>problema con el microprocesado</option>
            	<option value='11'>problema con La Memoria RAM</option>
            	<option value='12'>problema con la Placa Base</option>
            	<option value='13'>problema con la Tarjeta madre</option>
            	<option value='14'>Caída del sistema operativo</option>
            	<option value='15'>Problemas con la tarjeta de video</option>
            	<option value='16'>Computadora lenta</option>
            	<option value='17'>Incapacidad para conectarse a Internet</option>
            	<option value='18'>Incapacidad para borrar archivos</option>
                  <option value='19'>Otros</option>
							</select>
							</div>
							</div>";

						echo "<div class='col-sm-12'>
						<div class='form-group'> 
						<label>Descripcion</label>
						<textarea resize='none' value='$reg[4]'  name='Descripcion' rows='5'  id='Descripcion'   placeholder='Ingrese Descripcion' maxlength='700' class='form-control'  title='Ingrese la Observación' required>$reg[7]</textarea>
                           </div>
                           </div>";

                           echo "<div class='col-sm-4'>
						<div class='form-group'> 
						<label>Codigo de Pc</label>
						<input type='text' value='$reg[8]' id='Codigo' name='Codigo' class='form-control' name='Codigo' placeholder='Ingrese El Codigo' maxlength='50' required >
						</div>
						</div>";
                         
                         echo "<div class='col-sm-4'>
                         <div class='form-group'>
                         <label>Fecha de Salida</label>
                         <input type='date' class='form-control'  name='Fecha1' id='Fecha1' >
                            </div>

                         </div>";

						echo "<div class='col-sm-4'>
						<div class='form-group'> 
						<label>Estatus:</label>
           <select name='Estatus' id='Estatus' class='form-control'>
             
             <option value='Reparando'>Reparando</option>
             <option value='Listo'>Listo</option>
           </select>
           </div>
           </div>";

					}
					

					?>