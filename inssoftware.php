<?php
// Recuperamos datos del formulario
$des=$_POST['descripcion'];
$lic=$_POST['tipolicencia'];
$can=$_POST['cantidad'];
$fin=$_POST['fechafin'];
$obs=$_POST['observaciones'];
// conectamos con la BD
include("conexion.php");
// creamos consulta
$sql="INSERT INTO software(descripcion, tipolicencia,cantidad,fechafin,observaciones) VALUES('$des','$lic','$can','$fin','$obs')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de inserción $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header("location:software.php");
?>