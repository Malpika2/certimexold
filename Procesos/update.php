<?php
	include("/conexion.php");
$carpeta = "../Imagenes_Noticias/";
$boton = $_POST['BtnEA'];
$tituloN = $_POST['tituloN'];
$contenidoN = $_POST['contenidoN'];
$id_noticiaN = $_POST['id_noticiasN'];

	
	// echo "$boton - $tituloN - $contenidoN - idnoticia: $id_noticiaN ";//- $id_noticiaN";
	if($boton == 'actualizar'){
		$consulta="UPDATE noticias SET titulo='$tituloN', contenido='$contenidoN' WHERE noticias.id_noticias = '$id_noticiaN'";
		$resultado= $mysqli->query($consulta);
		
		opendir($carpeta);
		$destino = $carpeta.$_FILES['imagenN']['name'];
		copy($_FILES['imagenN']['tmp_name'],$destino);
		$nombre=$_FILES['imagenN']['name'];
		
		$consulta="UPDATE img_noticias SET url='$destino' WHERE img_noticias.id_noticias = '$id_noticiaN'";
		$resultado = $mysqli->query($consulta);
		header("Location:../Admin/noticias.php");
		
		
	}
	
	if($boton == 'eliminar'){
		$consulta="DELETE FROM noticias WHERE noticias.id_noticias = '$id_noticiaN'";
		$resultado= $mysqli->query($consulta);
		header("Location:../Admin/noticias.php");
	}
?>