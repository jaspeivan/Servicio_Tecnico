<?php

class controlDB{

	function __construct(){

		try{

		$host="localhost";
		$db_name="servicio_tecnico";
		$user="root";
		$pass="";


		$this->con=mysqli_connect($host,$user,$pass) or die("erro al conectar la base de dato");

		mysqli_select_db($this->con,$db_name) or die("No se pudo concetar la base de dato");

			


		}catch(Exception $ex){


			throw ($ex);

			
		}
	}

function consultar($sql)
{

	$res=mysqli_query($this->con,$sql);

	$data=NULL;
	while ($fila=mysqli_fetch_assoc($res)) {


		$data[]=$fila;

		}
		return $data;
}



function actualizar($in)
{

	mysqli_query($this->con,$in);
	if (mysqli_affected_rows($this->con)<=0) {	
		
		 "No se puede realizar la solicitud ";
		 echo ' <script language="javascript">alert("No se puede Actualizar.");</script> ';
		 echo "<script>location.href='usuario'</script>";	
	}else{

		echo '<script language="javascript">alert("Actualizado Con Exito");</script>';
	}
 }



function Eliminar($el)
{

	mysqli_query($this->con,$el);
	if (mysqli_affected_rows($this->con)<=0) {	
		
		 "No se puede realizar la solicitud ";
		 echo ' <script language="javascript">alert("Registro No Eliminado .");</script> ';
		 echo "<script>location.href='usuario'</script>";	
	}else{

		echo '<script language="javascript">alert("Usuario Eliminado Con Exito");</script>';
	}
}

function IngresarComputadora($ins)
{

	mysqli_query($this->con,$ins);
	if (mysqli_affected_rows($this->con)<=0) {	
		
		 "No se puede realizar la solicitud ";
		 echo ' <script language="javascript">alert("No se Pudo Registrar .");</script> ';
		 echo "<script>location.href='ComputadoraRegistrada.php'</script>";	
	}else{

		echo '<script language="javascript">alert("Computadora Registrada");</script>';
	}
}



}






?>