<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Gestion de Incidencias</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<?php
			session_start();

			?>

		<!-- Header -->
			<header id="header">
				<a href="index.php" class="title">Software</a>
				<nav>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="menumateriales.php">Menu Materiales</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">Gestion de Software</h1>
							<span class="image fit"></span>
							<p></p>
							<p></p>
						</div>
					</section>
<form name="software" id="software" method="post" action="inssoftware.php">
<table align="center" width="50%">
<tr>
	<td colspan="2" align="center"><h2> Insertar Informacion</h2></td>
</tr>
<tr>
	<td colspan="2" align="right"><?php echo "Usuario: $_SESSION[nombreusuario]"?>&nbsp; &nbsp;  <a href="gestion.php">Volver</a>&nbsp; &nbsp;  <a href="logout.php">Logout</a></td>
</tr>
<tr>
	<td>Descripción</td>
	<td><input type="text" name="descripcion" id="descripcion" placeholder="Descripción">
</tr>
<tr>
	<td>Tipo licencia</td>
	<td><input type="text" name="tipolicencia" id="tipolicencia" placeholder="Tipo licencia"></td>
</tr>
<tr>
	<td>Cantidad</td>
	<td><input type="text" name="cantidad" id="cantidad" placeholder="Cantidad"></td>
</tr>
<tr>
	<td>Fecha fin</td>
	<td><input type="text" name="fechafin" id="fechafin" placeholder="Fecha fin"></td>
</tr>
<tr>
	<td>Observaciones</td>
	<td><input type="text" name="observaciones" id="observaciones" placeholder="Observaciones"></td>
</tr>



<tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" value="Enviar">
			</td>
</tr>
</table>
</form>


			</div>
			<form action="pagina_busquedas.php" method="get">
			<label><h2>Buscar software: </h2><input type="text" name="buscar"></label>
			<input type="submit" name="enviando" value="Enviar" >
			</form>

<table>
<h2 style="width:40px; height:40px;">Ver software:</h2>
<tr><td>Descripción</td><td>Tipo licencia</td><td>Cantidad</td><td>Fecha fin</td><td>Observaciones</td></tr>

<?php
include("conexion.php");
//creamos la consulta
$sql="SELECT * FROM software as s";
//ejecutamos la consulta
$registros=mysqli_query($conexion,$sql);
//leemos el contenido de $registros
while ($linea=mysqli_fetch_array($registros))
{
	echo "<tr><td>$linea[descripcion]</td><td>$linea[tipolicencia]</td><td>$linea[cantidad]</td><td>$linea[fechafin]</td><td>$linea[observaciones]</td></tr>";
}
mysqli_close($conexion);
?>
</table>

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Gestion de materiales Salesianos. All rights reserved.</li><li>Design: Raul Martinez<br>Daniel Angel</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>