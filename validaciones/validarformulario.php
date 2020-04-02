<?php
if(isset($_POST['Registrar'])){
 	$Dep=$_POST['Dep'];
	$tip=$_POST['tip'];
	$Fecha=date('y-m-d');
	$Descripcion=$_POST['Descripcion'];
	$Codigo=$_POST['Codigo'];
	$fechaSalida='2018/10/25';
	$Estatus='Esperando';



	if (empty($Fecha)) {
		echo "<p>* tienes que colocar una Fecha</p>";
	exit;
	}
      if (empty($Descripcion)) {
      		echo "<p>* tienes que colocar una Descripción</p>";
	exit;
      }
     if (empty($Codigo)) {
     		echo "<p>* tienes que colocar un  codigo</p>";
	exit;
     }else{
       if (!is_numeric($Codigo)) {
       	echo "<p>*El Codigo   tienes que ser numerico</p>";
exit;
       }

     }
	}



?>