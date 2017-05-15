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
				<a href="index.html" class="title">Ordenadores</a>
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
							<h1 class="major">Gestion de Ordenadores</h1>
							<span class="image fit"></span>
							<p></p>
							<p></p>
						</div>
					</section>
<form name="ordenadores" id="ordenadores" method="post" action="insordenadores.php">
<table align="center" width="50%">
<tr>
	<td colspan="2" align="center"><h2> Insertar Informacion</h2></td>
</tr>
<tr>
	<td colspan="2" align="right"><?php echo "Usuario: $_SESSION[nombreusuario]"?>&nbsp; &nbsp;  <a href="gestion.php">Volver</a>&nbsp; &nbsp;  <a href="logout.php">Logout</a></td>
</tr>
<tr>
	<td>Placa Base </td>
	<td><input type="text" name="placa" id="placa" placeholder="Placa">
</tr>
<tr>
	<td>Procesador</td>
	<td><input type="text" name="procesador" id="procesador" placeholder="Procesador"></td>
</tr>
<tr>
	<td>RAM</td>
	<td><input type="text" name="RAM" id="RAM" placeholder="Memoria Ram"></td>
</tr>
<tr>
	<td>IP</td>
	<td><input type="text" name="ip" id="ip" placeholder="Direccion IP"></td>
</tr>
<tr>
	<td>Tarjetas</td>
	<td><input type="text" name="tarjetas" id="tarjetas" placeholder="Tarjetas"></td>
</tr>

<tr>
	<td>Dominio</td>
	<td><input type="text" name="dominio" id="dominio" placeholder="Dominio"></td>
</tr>
<tr>
	<td>Software</td>
	<td><input type="text" name="software" id="software" placeholder="software"></td>
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
			<form action="pagina_busqueda.php" method="get">
			<label><h2>Buscar ordenadores: </h2><input type="text" name="buscar"></label>
			<input type="submit" name="enviando" value="Enviar" >
			</form>

<table>
<h2 style="width:40px; height:40px;">Ver ordenador:</h2>
<tr><td>Placa</td><td>Procesador</td><td>RAM</td><td>Tarjetas</td><td>IP</td><td>Dominio</td><td>Software</td></tr>

<?php
include("conexion.php");
//creamos la consulta
$sql="SELECT o.placa, o.procesador, o.RAM, o.tarjetas,o.ip,o.dominio,o.software FROM ordenadores as o";
//ejecutamos la consulta
$registros=mysqli_query($conexion,$sql);
//leemos el contenido de $registros
while ($linea=mysqli_fetch_array($registros))
{
	echo "<tr><td>$linea[placa]</td><td>$linea[procesador]</td><td>$linea[RAM]</td><td>$linea[tarjetas]</td><td>$linea[ip]</td><td>$linea[dominio]</td><td>$linea[software]</td></tr>";
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