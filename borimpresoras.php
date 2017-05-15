<?php
include("conexion.php");
$tip=$_GET['tipo'];
$sql="DELETE FROM alumnos WHERE tipo='$tip'";
mysqli_query($conexion,$sql) or die("Error en el borrado");
mysqli_close($conexion);
header("location:impresoras.php");

?>
