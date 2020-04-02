<?php


	include 'connect.php';

					
					$id=$_POST['codigo'];
					$edi="SELECT login.id,login.Usuario,login.NombreyApellido,login.Cedula,login.correo,login.password,tipo_usuario.tipodeusuario,estado.Estado from login INNER JOIN tipo_usuario on login.id_tipousuario=tipo_usuario.id_tipousuario INNER JOIN estado on login.id_estado=estado.id_estado WHERE id=$id";
					
					$re=mysqli_query($con,$edi);
					while ($reg=mysqli_fetch_array($re))
					{
						$datosarray[] = $reg;
						//id
						echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>ID:</label>
							<input type='text' class='form-control'  value='$reg[0]'' name='id' readonly='readonly' >
						 </div>
					     </div>";
						// Usuario
                        
					     echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Usuario:</label>
							<input type='text' class='form-control'  value='$reg[1]'' name='Usuario' >
						 </div>
					     </div>";

					     //Nombre Nombre y Apellido
					     echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Nombre y Apellido:</label>
							<input type='text' class='form-control'  value='$reg[2]' name='NombreyApellido' >
						 </div>
					     </div>";
					     //cedula
					      echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Cedula:</label>
							<input type='text' class='form-control'  value='$reg[3]' name='Cedula' >
						 </div>
					     </div>";
                 // Email
                 echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Correo</label>
							<input type='text' class='form-control'  value='$reg[4]' name='Correo' >
						 </div>
					     </div>";


                       echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Correo</label>
							<input type='text' class='form-control'  value='$reg[4]' name='Correo' >
						 </div>
					     </div>";
                         echo "<div class='col-sm-6'>
					     <label> nueva Contraseña:</label>
						<input type='password' class='form-control' maxlength='15'  placeholder='Ingrese nueva Contraseña' id='pass' name='pass' title='la contraseña debe tener entre 5 a 15 caracteres' value='$reg[5]'>
						</div>
						</div>";

						 echo "<div class='col-sm-6'>
					     <label> Confirme Contraseña:</label>
						<input type='password' class='form-control' maxlength='15'  placeholder='Confirme Contraseña' id='rpass' name='rpass' title='la contraseña debe tener entre 5 a 15 caracteres' value='$reg[5]'>
						</div>
						</div>";

                   echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Tipo de Usuario:</label>";
							include 'connect.php';
                             $tip="SELECT * FROM tipo_usuario";
                             $re=mysqli_query($con,$tip);
							echo "<select class='form-control' id='id_tipousuario' name='id_tipousuario'>";
							while($mostrar=mysqli_fetch_array($re)){
							$sel=0;
							if($mostrar[1]==$reg[6]){
								$sel='selected';
							}else{
								$sel='';
							}
							echo "<option value=".$mostrar['id_tipousuario']." ".$sel.">".$mostrar['tipodeusuario']."</option>";
						}
							echo "</select>
							</div>
							</div>";
					   
					    echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>Estado:</label>";
							include 'connect.php';
							$es="SELECT * FROM estado";
							$res=mysqli_query($con,$es);
							echo "<select class='form-control' id='id_estado' name='id_estado'>";
							while($mostrar=mysqli_fetch_array($res)){
							if($mostrar[1]==$reg[7]){
								$sel='selected';
							}else{
								$sel=' ';
							}
							echo "<option value=".$mostrar['id_estado']." ".$sel.">".$mostrar['Estado']."</option>";
						}
							echo "</select>
							</div>
							</div>";
}

					?>