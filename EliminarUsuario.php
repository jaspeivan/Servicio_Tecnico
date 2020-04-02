<?php

include 'connect.php';

					
					$id=$_POST['codigo'];
					$edi="SELECT * FROM login WHERE id='$id'";
					
					$re=mysqli_query($con,$edi);
					while ($reg=mysqli_fetch_array($re))
					{
						$datosarray[] = $reg;
						//id
						echo "<div class='col-sm-6'> 
						<div class='form-group'> 
							<label>ID:</label>
							<input type='text' class='form-control'  value='$reg[0]' name='id' readonly='readonly' >
						 </div>
					     </div>";
						// Usuario
                        
					     
}

					?>
					