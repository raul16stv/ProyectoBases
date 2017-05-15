<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Gestion de Monitores</title>
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
include("conexion.php");
?>

		<!-- Header -->
			<header id="header">
				<a class="title">Monitores</a>
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
							<h1 class="major">Gestion de Monitores</h1>
							<span class="image fit"></span>
							<p></p>
							<p></p>
						</div>
					</section>
<form name="monitores" id="monitores" method="post" action="insmonitores.php">
<table align="center" width="50%">
<tr>
	<td colspan="2" align="center"><h2> Insertar Infwormacion</h2></td>
</tr>
<tr>
	<td colspan="2" align="right"><?php echo "Usuario: $_SESSION[nombreusuario]"?>&nbsp; &nbsp;  <a href="gestion.php">Volver</a>&nbsp; &nbsp;  <a href="logout.php">Logout</a></td>
</tr>
<tr>
	<td>Tamaño </td>
	<td><input type="text" name="tamaño" id="tamaño" placeholder="Tamaño">
</tr>
<tr>
	<td>Estado </td>
	<td><select name="estado" id="estado">
			<option value="">
<?php
$sql="SELECT * FROM estadomonitores";
$registros=mysqli_query($conexion,$sql);
while($linea=mysqli_fetch_array($registros))
{
	echo"<option value='$linea[estado]'>$linea[estado]";
}
?>
		</select>
	</td>
</tr>
<tr>
	<td>Tipo</td>
	<td><input type="text" name="tipo" id="tipo" placeholder="Tipo"></td>
</tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" value="Enviar">
			</td>
</tr>

</table>
</form>


			</div>
			<form action="pagina_busquedam.php" method="get">
			<label><h2>Buscar monitores: </h2><input type="text" name="buscar"></label>
			<input type="submit" name="enviando" value="Enviar" >
			</form>

<table>
<h2 style="width:40px; height:40px;">Ver monitor:</h2>
<tr><td>Tamaño</td><td>Estado</td><td>Tipo</td></tr>

<?php
include("conexion.php");
//creamos la consulta
$sql="SELECT m.tamano, m.estado, m.tipo FROM monitores as m";
//ejecutamos la consulta
$registros=mysqli_query($conexion,$sql);
//leemos el contenido de $registros
while ($linea=mysqli_fetch_array($registros))
{
	echo "<tr><td>$linea[tamano]</td><td>$linea[estado]</td><td>$linea[tipo]</td></tr>";
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