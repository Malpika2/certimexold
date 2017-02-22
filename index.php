<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	    <!-- Bootstrap Core CSS -->
    <title>CERTIMEX</title>
	<!-- THEMES -->
	<link id="callCss" rel="stylesheet" href="themes/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8"/>	
	<link id="callCss" rel="stylesheet" href="themes/css/style.css" type="text/css" media="screen" charset="utf-8" />
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link rel="stylesheet" href="themes/font-awesome/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
	<link href="css/carpusel.css" rel="stylesheet">
	    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
	<!--link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"-->
	<!--link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
	
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div id="headerSection">
	<div class="container" style="height:100px">	
		<div >
			<div class="cntr">
				<a href="#top"><img width="5%" src="Imagenes/certimex-logo.png" alt="icon-certimex"/><img width="12%" src="imagenes/certimex-slogan.png" alt="icon2-certimex"/></a>
			</div>
		</div>
		<div class="navbar">
			<div class="nav-collapse">
				<ul class="nav">
				<div>
					<li>
						<a  href="#acerca">CERCA DE</a>
					</li>
					<li>
						<a href="#servicios">SERVICIOS</a>
					</li>
					<li>
					   <a href="#procedimientos">PROCEDIMIENTOS</a>
					</li>
					<li>
						<a href="#ultimasn">ULTIMAS NOTICIAS</a>
					</li>
					<li>
						<a href="#contact">CONTACTO</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#inicio" class="dropdown-toggle" data-toggle="dropdown">LOGIN<span class="caret"></span></a>
						<ul id="menudp" class="dropdown-menu">
							<li>
								<div class="col-md-12">
									<form class="form" role="form" method="post" action="Procesos/validarUsuario.php" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											<h5>Iniciar Sesión</h5>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required/>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Password" required/>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-cta" align="center">Sign in</button>
										</div>
									</form>
								</div>
							</li>
						</ul>
					</li>
					</div>
				</ul>
			</div>
			<div>
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			</div>
		</div>
	</div>
	</div>
    <!-- Header -->
    <header id="top" class="header">
		<div class="text-vertical-center">
		<div class="container">
			<div class="row" style="padding:5% 1% 0% 1%; max-height:500px" >
				<!-- Carousel -->
				<div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="10000" style="background-color:rgba(24, 77, 0, 0.4); padding:1% 1% 0% 1%")>
					<div class="carousel-inner">	
						<?php
							include("Procesos/conexion.php");
							$consultaCS = "SELECT carrusel.encabezado, carrusel.contenido, carrusel.complemento, imagenes_carrusel.url FROM carrusel, imagenes_carrusel WHERE carrusel.id_carrusel = imagenes_carrusel.id_carrusel"; 
							$resultadoCS = $mysqli->query($consultaCS);
							$conta=1;
							while($fila=$resultadoCS->fetch_row()){
								if($conta<=1){
									$clase="\"item active\"";
								}else{$clase="\"item\"";}
								echo "<div class=$clase>";
									echo "<img src=\"certimex/$fila[3]\">";
									echo "<div class=\"header-text\">";
										echo "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center\"  style=\"background-color:rgba(13, 13, 13, .4)\">";										
											echo "<h3 style=\"color:#ffddcc\"><b>$fila[0]</b></br></br></h3>";
											echo "<p style=\"font-size:18px; text-align:justify;\">$fila[1]</p>";
											echo "<a class=\"btn btn-light btn-lg\" href=\"$fila[2]\"> Saber más...</a></div>";
										echo "<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8 text-center\"></div>";
										
										echo "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center\"></div>";
										
											
									echo "</div>";							
								echo "</div>";
							$conta++;
							}
						?>

					</div><!-- /carousel-inner-->
								<a class="btn btn-light " href="#myCarousel" data-slide="prev">&lsaquo;</a>	
								<a class="btn btn-light " href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div><!-- /carousel -->
			</div>
			</div>
		
        </div>
    </header>
    <!-- About -->
    <section id="acerca" class="acerca-section"  style=" padding:9% 0% 0% 0%">
		<div class="tab-content" style="background-image: url(imagenes/fondov2.png); background-size:100% 100%">
			<div class="tab-pane fade active in" id="home" style="height:650px">
				<h2 style="color:#F90B0B  "><b>Ascerca de Certimex</b></h2>
			<div>
			</div>	<div class="panel panel-default"  style="background-color:rgba(204, 255, 238,0.5)">
				<div class="panel-body" style="height:550px">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#info-pills" data-toggle="tab">Información</a>
						</li>
						<li class=""><a href="#mision-pills" data-toggle="tab">Misión</a>
						</li>
						<li class=""><a href="#vision-pills" data-toggle="tab">Visión</a>
						</li>
						<li class=""><a href="#valores-pills" data-toggle="tab">Valores</a>
						</li>
						</li>
						<li class=""><a href="#historia-pills" data-toggle="tab">Historia</a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane fade active in" id="info-pills">
							<div class="container">
							<?php 
								$consulta="SELECT * FROM informacion";
								$resultado=$mysqli->query($consulta);
								$fila =$resultado->fetch_assoc();
								$titulo2= strtoupper($fila['titulo']);
								echo "<h3 class=\"section-title text-center\">$titulo2</h3>";
								echo "<blockquote>";
								echo nl2br("<p>$fila[informacion]</p>");
								echo "</blockquote>";
							?>
							</div><!--//container-->     
						</div>
						<div class="tab-pane fade" id="mision-pills">
							<div class="container">
								<h3>MISIÓN</h3>
								<p>Somos una agencia de certificación de productos orgánicos, inocuos, de comercio justo, y calidad; con acreditación nacional e internacional, comprometida con los actores de las cadenas agroalimentarias sustentables.</p>
							</div>
						</div>
						<div class="tab-pane fade" id="vision-pills">
							<div class="container">
								<h3>VISIÓN</h3>
								<p>Ser la empresa social de certificación de productos y procesos sustentables, líder en México, alineada a su filosofía y valores, con procedimientos confiables e innovadores apegados a las realidades y exigencias nacionales e internacionales. </p>												
							</div>
						</div>
						<div class="tab-pane fade" id="valores-pills">
							<div class="container">
							<h3>VALORES</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
						<div class="tab-pane fade" id="historia-pills">
							<div class="container">
								<h3>HISTORIA</h3>
								<p>CERTIMEX se crea en el año de 1997 gracias al interés de los productores mexicanos de querer contar con una certificadora nacional que realizara con calidad los servicios de inspección y certificación, pero a precios accesibles para los interesados.
									Así, CERTIMEX inicia sus actividades en ese año ofreciendo únicamente los servicios de certificación de productos y procesos ecológicos u orgánicos, los cuales se han venido realizando desde entonces con bastante éxito</p>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
    </section>

    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="servicios-section">
	
	<!-- Carousel -->
				<div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="10000" style="background-color:rgba(24, 77, 0, 0.4); padding:1% 1% 0% 1%")>
					<div class="carousel-inner">	
						<?php
							include("Procesos/conexion.php");
							$consultaCS = "SELECT carrusel.encabezado, carrusel.contenido, carrusel.complemento, imagenes_carrusel.url FROM carrusel, imagenes_carrusel WHERE carrusel.id_carrusel = imagenes_carrusel.id_carrusel"; 
							$resultadoCS = $mysqli->query($consultaCS);
							$conta=1;
							while($fila=$resultadoCS->fetch_row()){
								if($conta<=1){
									$clase="\"item active\"";
								}else{$clase="\"item\"";}
								echo "<div class=$clase>";
									echo "<img src=\"certimex/$fila[3]\">";
									echo "<div class=\"header-text\">";
										echo "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center\"  style=\"background-color:rgba(13, 13, 13, .4)\">";										
											echo "<h3 style=\"color:#ffddcc\"><b>$fila[0]</b></br></br></h3>";
											echo "<p style=\"font-size:18px; text-align:justify;\">$fila[1]</p>";
											echo "<a class=\"btn btn-light btn-lg\" href=\"$fila[2]\"> Saber más...</a></div>";
											
											
										echo "<div class=\"col-xs-8 col-sm-8 col-md-8 col-lg-8 text-center\"></div>";
										echo "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center\"></div>";
										
											
									echo "</div>";							
								echo "</div>";
							$conta++;
							}
						?>

					</div><!-- /carousel-inner-->
								<a class="btn btn-light " href="#myCarousel" data-slide="prev">&lsaquo;</a>	
								<a class="btn btn-light " href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div><!-- /carousel -->
				
				<div id="myCarousel" class="carousel carousel-fade slide" data-ride="carousel" data-interval="10000">
					<div class="carousel-inner">	
						<?php
							include("Procesos/conexion.php");
							$sql = "SELECT * FROM servicios";
							$servicios2= $mysqli->query($sql);
							$indice=0;
							$conta=0;
							$aux=0;
							$contenido = array();
							
								while($fila2=$servicios2->fetch_row()){
									$contenido[$aux]= "<div class=\"header-text\">
														<div class=\"col-sm-4 col-xs-4 col-md-4\">
															<div class=\"\">
																<img class=\"figure-image\" src=\"Imagenes/cestosup.png\" alt=\"image\"/ style=\"width:100%; height=50px\">
																<div class=\"\">
																	<img class=\"figure-image\" src=\"img_servicios/$fila2[3]\" alt=\"image\"/ style=\"width:85px; height:100px\">
																	<h3 class=\"item-title\">$fila2[1]</h3>
																</div>
																<div class=\"item-desc\">
																	<p align=\"justify\" >$fila2[2]</p>
																</div>
																<img class=\"figure-image\" src=\"Imagenes/cestoinf.png\" alt=\"image\" style=\"width:230px; height=50px\">
															</div>
														</div></div>";
									$aux++;
								}
								$registros = count($contenido);
								while($indice<$registros){
										if($conta<=1){
											$clase="\"item active\"";
											$conta++;
										}else{$clase="\"item\"";}
										
										echo "<div class=$clase>";
											echo "<img src=\"Imagenes/germina.png\">";
											for($i=0;$i<3;$i++)
											{
												if($indice<$registros){
												echo "$contenido[$indice]";}
												$indice++;
											}	
											echo "</div>";	

								}
						?>

					</div><!-- /carousel-inner-->
								<a class="btn btn-light " href="#caruselSer" data-slide="prev">&lsaquo;</a>	
								<a class="btn btn-light " href="#caruselSer" data-slide="next">&rsaquo;</a>
				</div><!-- /carousel -->
				
				
       <div id="servicios" class="servicios-section">
        <div class="container" style="padding:2% 0% 0% 0%">
            <h2 class="section-title">SERVICIOS</h2>
            <div class="items-wrapper row">
				<?php
				include("Procesos/conexion.php");
				$sql = "SELECT * FROM servicios";
				$servicios= $mysqli->query($sql);
				while($fila = $servicios->fetch_row()){
					
				echo "<div class=\"item col-sm-4 col-xs-4 col-md-4\">
						<div class=\"item-inner\">
							<img class=\"figure-image\" src=\"Imagenes/cestosup.png\" alt=\"image\">
							<div class=\"\">
								<img class=\"figure-image\" src=\"img_servicios/$fila[3]\" alt=\"image\" style=\"padding:5% 15% 5% 15%\">
								<h3 class=\"item-title\">$fila[1]</h3>
							</div><!--//figure-holder-->
							
							<div class=\"item-desc\" style=\"height:100px; overflow:scroll\">
								<p align=\"justify\" >$fila[2]</p>
							</div><!--//item-desc-->
							<img class=\"figure-image\" src=\"Imagenes/cestoinf.png\" alt=\"image\">
						</div><!--//item-inner-->
					</div><!--//item-->";
				}
				?>
            </div><!--//items-wrapper-->
			<div class="items-wrapper row">
                <div class="item col-sm-4 col-xs-4 col-md-4">
                    <div class="item-inner">
						<img class="figure-image" src="Imagenes/cestosup.png" alt="image">
                        <div class="figure-holder">
                            <img class="figure-image" src="Imagenes/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">	SOLICITUD ELECTRÓNICA</h3>
                        <div class="item-desc">
                            ¿Quieres certificarte con CERTIMEX en linea?
                        </div><!--//item-desc-->
						<img class="figure-image" src="Imagenes/cestoinf.png" alt="image">
                    </div><!--//item-inner-->
                </div><!--//item-->
				<div class="item col-sm-4 col-xs-4 col-md-4">
                    <div class="item-inner">
					<img class="figure-image" src="Imagenes/cestosup.png" alt="image">
                        <div class="figure-holder">
                            <img class="figure-image" src="imagenes/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">PROYECTOS CERTIFICADOS</h3>
                        <div class="item-desc">
							<a class="" href="http://www.certimexsc.com/operadores.php">Conoce los operadores certificados por CERTIMEX</a>
                        </div><!--//item-desc-->
						<img class="figure-image" src="Imagenes/cestoinf.png" alt="image">
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-sm-4 col-xs-4 col-md-4">
                    <div class="item-inner">
					<img class="figure-image" src="Imagenes/cestosup.png" alt="image">
                        <div class="figure-holder">
                            <img class="figure-image" src="imagenes/figure-2.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">PRESUPUESTO APROXIMADO</h3>
                        <div class="item-desc">
							eCertimex: Módulo de cálculo de presupuestos
						</div><!--//item-desc-->
						<img class="figure-image" src="Imagenes/cestoinf.png" alt="image">
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-sm-4 col-xs-4 col-md-4">
                    <div class="item-inner">
					<img class="figure-image" src="Imagenes/cestosup.png" alt="image">
                        <div class="figure-holder">
                            <img class="figure-image" src="imagenes/figure-3.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">PROGRAMA DE CAPACITACIÓN</h3>
                        <div class="item-desc">
							......
						</div><!--//item-desc-->
						<img class="figure-image" src="Imagenes/cestoinf.png" alt="image">
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//items-wrapper-->
        </div><!--//container-->
    </div><!--//servicios-section ó servicios-->
    </section>

    <!-- Portfolio -->
	
	   <section id="procedimientos" class="services bg-primary">
        <div class="container" style="padding:9% 0% 0% 0%">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>PROCEDIMIENTOS</h2>
					<p class="intro">Contribuye a la conservación y mejoramiento de los recursos naturales y el medio ambiente.</p>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/ins.jpg"/>
								</span>
                                <h4>
                                    <strong>INSPECCIÓN Y CERTIFICACIÓN</strong>
                                </h4>
                                <p>Procedimiento para la inspeción y certificación de productos orgánicos.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/jas.jpg"/>
                            </span>
                                <h4>
                                    <strong>JAS-ORGANIC</strong>
                                </h4>
                                <p>Procedimiento para la inspección y certificación de productos orgánicos de acuerdo con las normas JAS- Organic de Japón.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/pic3.jpg"/>
                            </span>
                                <h4>
                                    <strong>BIRD FRIENDLY</strong>
                                </h4>
                                <p>Procedimientos para la inspección y ceritifación para Café Bajo sombra "Cafe Bird Friendly".</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
								<img src="Imagenes/pic5.jpg"/>
                            </span>
                                <h4>
                                    <strong>SIMBOLO DE PEQUEÑOS PRODUCTORES</strong>
                                </h4>
                                <p>Procedimiento para la inspección y certificación de las normas de Símbolo de Pequeños Productores</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
	
    <section id="ultimasn" class="procedimientos-section" style="padding:8% 0% 0% 0%">
           <div id="ultimasn" class="procedimientos-section">
        <div class="container text-center">
            <h2 class="section-title">ULTIMAS NOTICIAS</h2>
				<div class="col-md-12">
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
												include("Procesos/conexion.php");
												$consulta="SELECT id_noticias,titulo,fecha FROM noticias ORDER BY fecha DESC";
												$resultado= $mysqli->query($consulta);
												
												while($fila = $resultado->fetch_row()){
													echo "<th class=\"\"><div style='width:200px; overflow:hidden;'> <a href=\"#$fila[0]\" data-toggle=\"tab\">$fila[1]</a></div> </th>";
														
												}
										?> 
									</tr>
								</thead>
								<tbody>
								</tbody>
								</table>
							</div>
							<div class="tab-content">
								<?php
										$consulta="SELECT noticias.id_noticias,noticias.titulo,noticias.fecha,img_noticias.url,noticias.contenido FROM noticias, img_noticias WHERE img_noticias.id_noticias=noticias.id_noticias ORDER BY fecha DESC";
										$resultado= $mysqli->query($consulta);
										while($fila = $resultado->fetch_row()){
											$contenido=substr($fila[4],0,100);
											
											echo "<div class=\"tab-pane fade\" id=\"$fila[0]\">";
												echo "<div class=\"\"><h2> $fila[1]</h2></div>";
												echo "<div class=\"\"><div class=\"col-md-5 col-sm-5 col-xs-12\" style='overflow:hidden'><img src=\"certimex/$fila[3]\" width=\"300\"/></div>";
												echo "<div class=\"col-md-7 col-sm-7 col-xs-12\" style=\"with:65px; height:65px; overflow:hidden; text-overflow:ellipsis;\"><p align=\"justify\">$fila[2]</br>$contenido ...</p></div></div>";
												echo "<form class=\"\" role=\form\" method=\"GET\" action=\"noticias.php\"><button type=\"submit\" class=\"btn btn-info\" formtarget=\"_blank\">Leer Más</button>";
												echo "<div class=\"\"><input class=\"\" name=\"id_noticias\" value=\"$fila[0]\" type=\"hidden\"/></div></form>";
											echo "</div>"; 
										}
								?>	
							</div>
                        </div> <!-- /panel-body-->
                    </div>
                </div>
							
        </div><!--//container-->
    </div><!--//ULTIMAS NOTICIAS SECCION-->
    </section>    
	
	<h3>Directorio</h3>
				<div class="item col-md-3 col-sm-3 col-xs-12">
					<b>Consejo directivo</b>
						<ul style="list-style-type:none">
							<li>M.C. Esteban Escamilla Prado</li>
							<li>Dr. Cesáreo Rodriguez Hernández</li>
							<li>Ing. Criserio Augusto Torres Ventura</li>
						</ul>
					<b> Comisión de Normas</b>
						<ul style="list-style-type:none">
							<li>Francisco Vanderhoff Boersma</li>
							<li>Jesús Martínez Salazar</li>
							<li>Taurino Reyes Santiago</li>
						</ul>
				</div>
				<div class="item col-md-3 col-sm-3 col-xs-12">
					<b>Planeacion del Servicio de Certificación</b>
						<ul style="list-style-type:none">
							<li>Liliana Barrios Barrionuevo</li>
							<li>Ing. Agrónomo en Horticultura</li>
							<li>inspeccion@certimex.com</li>
						</ul>
				</div>
				<div class="item col-md-3 col-sm-3 col-xs-12">
					<b>Personal de Inspección</b>
						<ul style="list-style-type:none">
							<li>Carlos Aguilar Moreno</li>
							<li>Ing. Agrónomo en sistemas de producción</li>
							<li>carloscafem@hotmail.com</li>
						</ul>
				</div>
				<div class="item col-md-3 col-sm-3 col-xs-12">
					<b></br></b>
						<ul style="list-style-type:none">
							<li>Martha Juárez Ramírez</li>
							<li>Ing. Agrónomo</li>
							<li>marthitacmx@hotmail.com</li>
						</ul>
				</div>
			
		
	

    <!-- Footer -->
    <footer>
	
        <div class="container" style="background-image: url(Imagenes/germina.png); background-size:100% 100%; padding:25% 0% 1% 0%">
				 <section id="contact" class="contact-section"> 
				 <div class="row">
					</div>
				 <div id="contact" class="contact-section">
				<div class="container text-center" style="color:white">
				<div class="container text-left">
					
				</div>
					<h2 class="section-title">Contáctanos</h2>
				   
						<div class="item item-3 col-md-3 col-sm-3 col-xs-6">
							<p> Direccion</p>
							<p>Calle 16 de Septiembre 204, Colonia Ejido Guadalupe Victoria, Oaxaca de Juárez, Oaxaca, México.</p>
						
						</div>
						<div class="item item-3 col-md-3 col-sm-3 col-xs-6">
						 <ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
								</li>
							</ul>
						</div>
						<div class="item item-3 col-md-3 col-sm-3 col-sx-6">
							<p>Telefono</p>
							<p>01 951 520 2687 - 01 951 520 0617</p>
						</div>
						<div class="item item-3 col-md-3 col-sm-3 col-sx-6">
							<p> Correo </p>
							<p>Certimex@certimexsc.com</p>
						</div>  
				</div><!--//container-->
			</div><!--//contact-section-->
			</section>
        </div>
		        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

	
		<script src="themes/js/jquery-1.9.1.min.js"></script>
		<!--script src="themes/js/bootstrap.min.js" type="text/javascript"></script-->
		<!--script src="themes/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script-->
		<!--script src="themes/js/jquery.easing-1.3.min.js"></script-->
		<script src="themes/js/default.js"></script> 
		<script type="text/javascript">

			$('#testimonial').carousel({
			  interval: 10000
			})
			$('#myCarousel').carousel({
			  interval: 7000
			})
		</script>	
			
		
		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

	</body>

</html>
