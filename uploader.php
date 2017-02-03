<?php
	$carpeta = "Imagenes_Noticias/";
	opendir($carpeta);
	$destino = $carpeta.$_FILES['imagen']['name'];
	copy($_FILES['imagen']['tmp_name'],$destino);
	echo "archivo subido exitosamente";
	$nombre=$_FILES['imagen']['name'];
	echo "<img src=\"Imagenes_Noticias/&nombre\">";

?>