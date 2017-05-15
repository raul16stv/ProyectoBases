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
			include("conexion.php");
			?>

		<!-- Header -->
			<header id="header">
				<a href="index.php" class="title">Impresoras</a>
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
							<h1 class="major">Gestion de impresoras</h1>
							<span class="image fit"></span>
							<p></p>
							<p></p>
						</div>
					</section>
<form name="impresoras" id="impresoras" method="post" action="insimpresoras.php">
<table align="center" width="50%">
<tr>
	<td colspan="2" align="center"><h2> Insertar Informacion</h2></td>
</tr>
<tr>
	<td colspan="2" align="right"><?php echo "Usuario: $_SESSION[nombreusuario]"?>&nbsp; &nbsp;  <a href="gestion.php">Volver</a>&nbsp; &nbsp;  <a href="logout.php">Logout</a></td>
</tr>
<tr>
	<td>Tipo </td>
	<td><select name="tipo" id="tipo">
			<option value="">
<?php
$sql="SELECT * FROM tipoimpresora";
$registros=mysqli_query($conexion,$sql);
while($linea=mysqli_fetch_array($registros))
{
	echo"<option value='$linea[tipo]'>$linea[tipo]";
}
?>
		</select>
	</td>
</tr>
<tr>
	<td>Consumible</td>
	<td><input type="text" name="consumible" id="consumible" placeholder="Consumible"></td>
</tr>


<tr>
	<td colspan="2" align="center">
		<input type="submit" value="Enviar">
			</td>
</tr>
</table>
</form>


			</div>
			<form action="pagina_busquedai.php" method="get">
			<label><h2>Buscar impresora: </h2><input type="text" name="buscar"></label>
			<input type="submit" name="enviando" value="Enviar" >
			</form>

<table>
<h2 style="width:40px; height:40px;">Ver impresoras:</h2>
<tr><td>Tipo</td><td>Consumible</td>

<?php
include("conexion.php");
//creamos la consulta
$sql="SELECT i.tipo, i.consumible FROM impresoras as i";
//ejecutamos la consulta
$registros=mysqli_query($conexion,$sql);
//leemos el contenido de $registros
while ($linea=mysqli_fetch_array($registros))
{
	echo "<tr><td>$linea[tipo]</td><td>$linea[consumible]</td></tr><a href='borimpresoras.php?clave=$linea[tipo]'><img src= 'images/borrar.png' width='30'></a></td></tr>";";
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