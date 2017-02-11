
					<!DOCTYPE html>
						<html lang="en">
							<head>
								<title>CERTIMEX</title>
								<!-- Meta -->
								<meta charset="utf-8">
								<meta http-equiv="X-UA-Compatible" content="IE=edge">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<meta name="description\" content=\"Responsive HTML5 website landing page for developers and startups">
								<meta name="author\" content=\"Xiaoying Riley at 3rd Wave Media">    
								<link rel="shortcut icon\" href=\"../../favicon.ico">  
								<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
								<!-- Global CSS -->
								<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">   
								<!-- Plugins CSS -->
								<link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.css">
								<!-- Theme CSS -->  
								<link id="theme-style" rel="stylesheet" href="../../assets/css/styles.css">
								<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
								<!--[if lt IE 9]>
								  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
								  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
								<![endif]-->
								
							</head> 

							<body>
								<header>
								</header>
								<div id="ultimasn" class="procedimientos-section">
									<div class="container text-center">
										<h2 class="section-title">ULTIMAS NOTICIAS</h2>
										
											<div class="col-md-12"><div>
											<?php
											echo "<img src=\"/certimex../Imagenes_Noticias/cats-h-c-640-719-3.jpg\"/>";
											echo "<p>contenido :Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un gran océano de lenguas. Un riachuelo llamado Pons fluye por su pueblo y los abastece con las normas necesarias. Hablamos de un país paraisomático en el que a uno le caen pedazos de frases asadas en la boca. Ni siquiera los todopoderosos signos de puntuación dominan a los textos simulados; una vida, se puede decir, poco ortográfica. Pero un buen día, una pequeña línea de texto simulado, llamada Lorem Ipsum, decidió aventurarse y salir al vasto mundo de la gramática. El gran Oxmox le desanconsejó hacerlo, ya que esas tierras estaban llenas de comas malvadas, signos de interrogación salvajes y puntos y coma traicioneros, pero el texto simulado no se dejó atemorizar. Empacó sus siete versales, enfundó su inicial en el cinturón y se puso en camino. Cuando ya había escalado las primeras colinas de las montañas cursivas, se dio media vuelta para dirigir su mirada por última vez, hacia su ciudad natal Letralandia, el encabezamiento del pueblo Alfabeto y el subtítulo de su

</p>";
											?>
								</div>
												<div class="panel panel-default">
													<div class="panel-heading">
														Ultimas Noticias
													</div>
													<div class="panel-body">
														<div class="table-responsive">
															<table class="table table-striped table-bordered table-hover" id="dataTables-example">
															<thead>
																<tr>
																	<?php
																			include("../../procesos/conexion.php");
																			$consulta="SELECT id_noticias,titulo,fecha FROM noticias ORDER BY fecha DESC";
																			$resultado= $mysqli->query("$consulta");
																			
																			while($fila = $resultado->fetch_row()){
																				echo "<th class=\"\"><div style='width:200px; overflow:hidden;'> <a class\"active\" href=\"#$fila[0]\" data-toggle=\"tab\">$fila[1]</a></div> </th>";
																					
																			}
																	?> 
																</tr>
															</thead>
															<tbody>
															</tbody>
															</table>
														</div>
														<div class\"tab-conten\">
														<p> uno </p>
															<?php
																	$consulta="SELECT noticias.id_noticias,noticias.titulo,noticias.fecha,img_noticias.url,noticias.contenido FROM noticias, img_noticias WHERE img_noticias.id_noticias=noticias.id_noticias ORDER BY fecha DESC";
																	$resultado= $mysqli->query($consulta);
																	while($fila = $resultado->fetch_row()){
																		$contenido=substr($fila[4],0,100);
																		
																		echo "<div class=\"tab-pane fade\" id=\"$fila[0]\">";
																			echo "<div class=\"active\"><h2> $fila[1]</h2></div>";
																			echo "<div class=\"\"><div class=\"col-md-5 col-sm-5 col-xs-12\" style='overflow:hidden'><img src=\"/certimex/Imagenes_Noticias/$fila[3]\" width=\"300\"/></div>";
																			echo "<div class=\"col-md-7 col-sm-7 col-xs-12\" style=\"with:65px; height:65px; overflow:hidden; text-overflow:ellipsis;\"><p align=\"justify\">$fila[2]</br>$contenido ...</p></div></div>";
																			echo "<a class=\"btn btn-info\" href=\"Noticia$fila[0].php\">Leer Más</a>";
																		echo "</div>"; 
																	}
															?>
														</div>
													</div> <!-- /panel-body-->
												</div>
											</div>
														
									</div><!--//container-->
								</div><!--//ULTIMAS NOTICIAS SECCION-->	
							<footer>
							
							</footer>
							</body>

							   <!-- Javascript -->          
							<script type="text/javascript" src="../../assets/plugins/jquery-1.12.3.min.js"></script>
							<script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
							<script type="text/javascript" src="../../assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>     
							<script type="text/javascript" src="../../assets/js/main.js"></script> 
						</HTML>
						