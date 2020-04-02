<!-- cabecera del inicio -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width,use-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/menuss.css">
	<link rel="stylesheet" type="text/css" href="css/Estiloo.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/reponsive.css" rel="stylesheet">
	<script  src="js/ValidarBuscador.js"></script>
	<script  src="js/validarUsuario.js"></script>
	<script src="js/validarformulario.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/myjavaaaja.js"></script>
		<script src="js/funcc.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<style>
	body  {
		background-color: #ffff;
	}
</style>
</head>
<body>
	<div class='container-fluid' >
    
     	
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #fff;" >
			<div class="col-xs-3 col-sm-4 col-md-3 col-lg-4"><img src="img/Fundacion.JPG" width="100px" height="100px" style="padding: 0px"></div>              
			<div class="col-xs-4 col-sm-5 col-md-7 col-lg-6"style="color: black; "><h2>Servicio Técnico Computacional</h2></div>
          <div class="col-xs-1 col-sm-0 " ><img src="img/gbv.PNG" width="150px" height="95px" style="padding: 1px; text-align: left; "  ></div>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><hr class="hr"></div>
         <br>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: right;" >


			<?php
       //aqui cuando entre el usuario aqui se va a encargar de poner que tipo de usuario es si es Administrador o técnico con su repectivo nombres
	
				if($_COOKIE["tipodeusuario"]=='Tecnico')
				{
				 echo "<br>";

				 echo '<h3 class="panel-title" style="color:black; font-size: 18px; font:bold;" >Técnico:'.$_COOKIE["c_NombreyApellido"];echo '</h3> ';			

			

				}elseif($_COOKIE["tipodeusuario"]=='Administrador'){	

					echo "<br>";
					echo '<h3 class="panel-title" style="color:black; font-size: 18px; font:bold;">Administrador:' .$_COOKIE["c_NombreyApellido"]; echo'</h3>';
				
			
			}

			?>
			
</div>
      
			
		


