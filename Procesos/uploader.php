<?php
	include("/conexion.php");

	$carpeta = "../Imagenes_Noticias/";
	
	$titulo = $_POST['titulo'];
	$contenido = $_POST['contenido'];
	$fecha = $_POST['fecha'];
	
	opendir($carpeta);
	$destino = $carpeta.$_FILES['imagen']['name'];
	copy($_FILES['imagen']['tmp_name'],$destino);
	$nombre=$_FILES['imagen']['name'];
	
	$sql = "INSERT INTO noticias(titulo,contenido,fecha) VALUES ('$titulo','$contenido','$fecha')";
	$resultado= $mysqli->query($sql);//Ejecuta insercion a tabla "noticias"
	$sqlConsult = "SELECT * FROM noticias WHERE noticias.titulo = '$titulo'";
	$resultado = $mysqli->query($sqlConsult);//ejecuta consulta 
	$imagen = $resultado->fetch_assoc(); //almacena datos de la consulta anterior
	$sql2 = "INSERT	INTO img_noticias(id_noticias,url) VALUES ('$imagen[id_noticias]','$destino')"; //almacena en la tabla img_noticias la direccion
	$mysqli->query($sql2);

?>