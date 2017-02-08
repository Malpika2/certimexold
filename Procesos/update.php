<?php
	include("/conexion.php");
	
$boton = $_POST['BtnEA'];
$tituloN = $_POST['tituloN'];
$contenidoN = $_POST['contenidoN'];
//$id_noticiaN = $_POST['id_noticiasN'];
	
	 echo "$boton - $tituloN - $contenidoN ";//- $id_noticiaN";
	// if($boton == 'actualizar'){
		// echo "actualizar";
		// $consulta="UPDATE noticias SET titulo=$tituloN, contenidoN=$contenido WHERE id_noticiaN=$id_noticia";
		// $resultado= $mysqli->query($consulta);
	// }
	
	// if($boton == 'eliminar'){
		// echo "eliminar";
	// }
?>