<?php
include 'connect.php';
if (isset($_POST['Buscar'])) {
    $Cedula=$_POST['Cedula'];

$bus="SELECT Cedula from empleado WHERE Cedula='$Cedula'";

$ress=mysqli_query($con,$bus);

}
?>