<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Propiedades de Background-image</title>
	<link rel="stylesheet" type="text/css" href="Background-image.css">
</head>
<body>
	<?php
					include("Procesos/conexion.php");
					$consultaCI = "SELECT * FROM carrusel"; 
					$resultadoCI = $mysqli->query($consultaCI);
					$cont=1;
					$registros=$resultadoCI->num_rows;
					echo "$registros";
				?>
</body>
</html>