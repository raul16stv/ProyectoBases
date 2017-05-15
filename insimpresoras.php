<?php
// Recuperamos datos del formulario
$tip=$_POST['tipo'];
$con=$_POST['consumible'];
// conectamos con la BD
include("conexion.php");
// creamos consulta
$sql="INSERT INTO impresoras(tipo, consumible) VALUES('$tip','$con')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de inserción $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header("location:impresoras.php");
?>