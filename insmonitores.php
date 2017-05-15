<?php
// Recuperamos datos del formulario
$tam=$_POST['tamaño'];
$est=$_POST['estado'];
$tip=$_POST['tipo'];
// conectamos con la BD
include("conexion.php");
// creamos consulta
$sql="INSERT INTO monitores(tamano,estado,tipo) VALUES('$tam','$est','$tip')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de inserción $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header("location:monitores.php");
?>