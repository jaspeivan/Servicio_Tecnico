<?php
 include 'connect.php';
       
       $id=$_POST['id'];
     

	$el="DELETE FROM login WHERE id='$id' ";


$ress=mysqli_query($con,$el) or die("Error A Eliminar");


if (!$ress) {
	echo ' <script language="javascript">alert("No se pudo Eliminar.");</script> ';
		 echo "<script>location.href='usuario.php'</script>";
}else{
	echo ' <script language="javascript">alert("El registro se ha Eliminado!!.");</script> ';
		 echo "<script>location.href='usuario.php'</script>";
	}

mysqli_close($con);	

?>