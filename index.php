<!--Aqui va hacer el index que seria el login donde se va a logear los Usuarios-->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Servicio T&eacute;cnico Computacional</title>
   <link rel="icon" type="" href="img/logo_mppc.JPG">
   <link rel="stylesheet" type="text/css" media="screen" href="css/estilosindexx.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
</head>

<body>
  <?php
  include ('include/cabecera2.php');
  
?>
  <form action="Validacion.php" method="POST">
    <div align="center" class="form-group col-lg-12">
      <div><img src="img/servicios1.PNG" width="220px" style="margin-top:20px; "></div>
      <h1 style="color:red; "></h1>
      <div class="container">
        <div id="loginbox" style="margin-top:5px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-success">
            <div class="panel-heading" style='background: #BF312F; color:white ; font-weight: bold;'>
              <div align="center" class="panel-title" >Iniciar Sesi&oacute;n</div>
              
            </div>
            
         <div style="padding-top:30px" class="panel-body">
           
            <?php
              
              if( isset( $_COOKIE['c_mensaje']) )
              {

               if ($_COOKIE ["c_mensaje"]==5) {


                echo "<div class='alert alert-danger'  role='alert' style='text-align: left'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                echo "<strong><i class='fas fa-times-circle'></i> Usuario y/o Contraseña inválida.</strong>";
                echo "</div>";
                setcookie("c_mensaje" ,0);
              }
              if ($_COOKIE ["c_mensaje"]==4) {


                echo "<div class='alert alert-danger'  role='alert' style='text-align: left'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>";
                echo "<strong><i class='fas fa-times-circle'></i> Usuario no registrado en el sistema.</strong>";
                echo "</div>";
                setcookie("c_mensaje" ,0);
              }
            } 
            ?>                      
           

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" name="Usuario" id="Usuario" value="" placeholder="Ingrese Usuario" class="form-control" required>
            </div>
            <div  style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" name="pass"  id="pass"  class="form-control" placeholder="Ingrese la contraseña" required>
            </div>
            <div class="col-sm-12 controls" >
              <input type="submit" class="btn btn-success" name="Ingresar" value="Ingresar"></input>
            </div>

         </div>

          </div>
          
        </div>
        
      </div>
      
    </div>
  </form>

</body>
 
 <?php
 
   if(isset($_POST['submit'])){
     require("Validacionn.php");
     require("RegistroUsarioo.php");
   }
   ?>

   <?php 
include 'footer.php';
   ?>
</html>