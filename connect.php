<?php
	$con= new mysqli("localhost", "root", "", "servicio_tecnico");
	if(mysqli_connect_errno()){
		echo "Este sitio esta presentando problemas";
	}
	$con->set_charset("utf8");
	?>