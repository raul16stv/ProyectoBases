﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title></title>
</head>

<body>
<?php
	$busqueda= $_GET["buscar"];
	include("conexion.php");
	$consulta="SELECT * FROM software WHERE tipolicencia LIKE '%$busqueda%'";
	
	$resultados= mysqli_query($conexion, $consulta);
	
	while($linea=mysqli_fetch_array($resultados,MYSQL_ASSOC)){
	echo "<tr><td>$linea[descripcion]</td><td>$linea[tipolicencia]</td><td>$linea[cantidad]</td><td>$linea[fechafin]</td><td>$linea[observaciones]</td></tr>";
}
mysqli_close($conexion);
?>
</body>

</html>
