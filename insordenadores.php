<?php
// Recuperamos datos del formulario
$pla=$_POST['placa'];
$pro=$_POST['procesador'];
$ram=$_POST['RAM'];
$tar=$_POST['tarjetas'];
$ip=$_POST['ip'];
$dom=$_POST['dominio'];
$sof=$_POST['software'];
// conectamos con la BD
include("conexion.php");
// creamos consulta
$sql="INSERT INTO ordenadores(placa,procesador,RAM,tarjetas,ip,dominio, software) VALUES('$pla','$pro','$ram','$tar','$ip','$dom','$sof')";
// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de inserción $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header("location:ordenadores.php");
?>