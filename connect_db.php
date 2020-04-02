<?php


		$con = new MySQLi("localhost", "root","", "servicio_tecnico");
		if ($con-> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $con -> mysqli_connect_errno() 
				. ") " . $con-> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>