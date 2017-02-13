<?php
	include("../../Procesos/conexion.php");

	$carpeta = "../imagenes_admin/";
	
	$encabezado =$_POST['encabezado'];
	$contenido = $_POST['contenido'];
	$complemento = $_POST['complemento'];
	
	
	opendir($carpeta);
	$destino = $carpeta.$_FILES['imagenC']['name'];
	echo "$destino";
	copy($_FILES['imagenC']['tmp_name'],$destino);
	$nombre=$_FILES['imagenC']['name'];
	echo "$nombre";
	
	$sql = "INSERT INTO carrusel(encabezado,contenido,complemento,url) VALUES ('$encabezado','$contenido','$complemento',$destino)";
	$resultado= $mysqli->query($sql);//Ejecuta insercion a tabla "noticias"


?>