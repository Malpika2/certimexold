<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>CERTIMEX</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 website landing page for developers and startups">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body>
<!-- ******HEADER****** --> 
  <header id="header" class="header">  
        <div class="container col-md-12 col-sm-12 col-sx-12">       
            <h1 class="logo">
                <a class="scrollto" href="#inicio">
                    <span class="logo-icon-wrapper"><img class="logo-icon" src="assets/images/logo-icon.svg" alt="icon"/></span>
                    <span class="text"><span class="highlight">CERTI</span>MEX</span>
				</a>
            </h1><!--//logo-->
            <nav class="main-nav navbar-right" role="navigation ">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->
                <div id="navbar-collapse" class="navbar-collapse collapse"> 
                    <ul class="nav navbar-nav" >
                        <li class="active nav-item"><a class="scrollto" href="#inicio">INICIO</a></li>
                        <li class="nav-item"><a class="scrollto" href="#acerca">CERCA DE</a></li>
                        <li class="nav-item"><a class="scrollto" href="#servicios">SERVICIOS</a></li>                        
                        <li class="nav-item"><a class="scrollto" href="#procedimientos">PROCEDIMIENTOS</a></li>
                        <li class="nav-item"><a class="scrollto" href="#ultimasn">ULTIMAS NOTICIAS</a></li>
                        <li class="nav-item"><a class="scrollto" href="#contact">CONTACTO</a></li>						
						<li class="dropdown nav-item">
						  <a href="#incio" class="dropdown-toggle" data-toggle="dropdown">LOGIN<span class="caret"></span></a>
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
							</ul><!--menu-->
						</li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
			</nav><!--//main-nav-->                     
        </div><!--//container-->
    </header><!--//header-->
    
    <div id="inicio" class="inicio-section">
        
        <div id="inicio-carousel" class="inicio-carousel carousel carousel-fade slide" data-ride="carousel" data-interval="10000">
            <!--
            <div class="figure-holder-wrapper">
        		<div class="container">
            		<!--<div class="row">
                		<!-- <div class="figure-holder"> -->
                	        <!-- <img class="figure-image img-responsive" src="assets/images/imac.png" alt="image" /> -->
                        <!-- </div><!--//figure-holder--> 
            		<!--</div><!--//row--
        		</div><!--//container--
    		</div><!--//figure-holder-wrapper-->
            
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#inicio-carousel"></li>
				<li data-slide-to="1" data-target="#inicio-carousel"></li>
				<!--
				<li data-slide-to="2" data-target="#inicio-carousel"></li>  
				-->
			</ol>
			
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
    			
				<div class="item item-1 active">
					<div class="item-content container">
    					<div class="item-content-inner">
    				        
				            <h2 class="heading">Certificadora Mexicana de<br class="hidden-xs"/>Productos y Procesos Ecológicos</h2>
				            <p class="intro">Constituida con la finalidad de contribuir en el desarrollo de la producción mediante
											la inspección y certificación de calidad de los procesos y productos agrícolas, pecuarios, agroindustriales y forestales.</p>
				            <a class="btn btn-primary btn-cta scrollto" href="#acerca">Saber mas...</a>		
    				        
    					</div><!--//item-content-inner-->
					</div><!--//item-content-->
				</div><!--//item-->
				
				<div class="item item-2">
					<div class="item-content container">
						<div class="item-content-inner">
				            <h2 class="heading">Convocatoria</h2>
				            <p class="intro">Curso Básico para la formación de inspectores para </br>la certificación de productos orgánicos.</br>Mercado nacional e internacional.</p>
				            <a class="btn btn-primary btn-cta" href="http://www.certimexsc.com/docs/solicitud_inspectores.docx" target="_blank">Solicitud de Participación</a>
    				        
    					</div><!--//item-content-inner-->
					</div>
				</div><!--//item-->
				
			</div><!--//carousel-inner-->

		</div><!--//carousel-->
		
    </div><!--//inicio-->
    <!-- acerca" "CERCA DE" -->
	<div id="acerca" class="acerca-section">
        <div class="container">
			<?php 
				include("Procesos/conexion.php");
				$consulta="SELECT * FROM informacion";
				$resultado=$mysqli->query($consulta);
				$fila =$resultado->fetch_assoc();
				echo "<h2 class=\"section-title text-center\">$fila[titulo]</h2>";
				echo "<blockquote>";
				echo "<p>$fila[informacion]</p>";
				echo "</blockquote>";
			?>
        </div><!--//container-->
    </div><!--//acerca ACERCA DE -->
    
	<!-- servicios"-->
    <div id="servicios" class="servicios-section">
        <div class="container text-center">
            <h2 class="section-title">CERTIMEX</h2>
            
            <div class="items-wrapper row">
                <div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">	CERTIFICACIÓN</h3>
                        <div class="item-desc">
                            Consultar procedimientos para conocer a detalle cómo acceder a cada inspección y certificación.
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
				<div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">EXPORTACIÓN</h3>
                        <div class="item-desc">
							Permisos de importación de productos orgánicos en la unión europea (UE) y emisión de certificados de control.
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-2.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">SELLO CERTIMEX</h3>
                        <div class="item-desc">
							Marca registrada que sólo podrá ser usada por los proveedores que tengan la certificación vigente para el tipo de producto correspondiente.	
						</div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-3.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">PROCEDIMIENTO: APELACIONES, QUEJAS Y ENMIENDAS</h3>
                        <div class="item-desc">
							Apelaciones, quejas y enmiendas	
						</div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//items-wrapper-->
			
			<div class="items-wrapper row">
                <div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">	SOLICITUD ELECTRÓNICA</h3>
                        <div class="item-desc">
                            ¿Quieres certificarte con CERTIMEX en linea?
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
				<div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">PROYECTOS CERTIFICADOS</h3>
                        <div class="item-desc">
							Conoce los operadores certificados por CERTIMEX
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-2.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">PRESUPUESTO APROXIMADO</h3>
                        <div class="item-desc">
							eCertimex: Módulo de cálculo de presupuestos
						</div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="assets/images/figure-3.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">PROGRAMA DE CAPACITACIÓN</h3>
                        <div class="item-desc">
							......
						</div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//items-wrapper-->
        </div><!--//container-->
    </div><!--//servicios-section ó servicios-->
    
	<!-- Procedimientos-->
	<div id="procedimientos" class="procedimientos-section">		
			<div class="container text-center">
				<h2 class="section-title">PROCEDIMIENTOS</h2>
				<p class="intro">Contribuye a la conservación y mejoramiento de los recursos naturales y el medio ambiente.</p>
				<div class="procedimientos-wrapper">
					<div class="item item-1 col-md-3 col-sm-3 col-xs-12">
						<div class="item-inner">
							<h3 class="item-heading">INSPECCIÓN Y CERTIFICACIÓN</h3>
							<div class="price-desc">
								<p>Procedimiento para la inspeción y certificación de productos orgánicos</br></br></br></br></br></p>
							</div>
							<a class="btn btn-cta" href="#">Leer más</a>
						</div>
					</div><!--Inspeccion-->
					<div class="item item-2 col-md-3 col-sm-3 col-xs-12">
						<div class="item-inner">
							<h3 class="item-heading">JAS-ORGANIC</h3>
								<div class="price-desc">
									<p>Procedimiento para la inspección y certificación de productos orgánicos de acuerdo con las normas JAS- Organic de Japón.</br></br></p>
								</div>
							<a class="btn btn-cta" href="#">Leer más</a>
						</div>
					</div><!--JAS-ORGANIC-->
					<div class="item item-3 col-md-3 col-sm-3 col-xs-12">
						<div class="item-inner">
							<h3 class="item-heading">BIRD FRIENDLY</h3>
							<div class="price-desc">
								<p>Procedimientos para la inspección y ceritifación para Café Bajo sombra "Cafe Bird Friendly".</br></br></br></br></p>
							</div>
							<a class="btn btn-cta" href="#">Leer más</a>
						</div>
					</div><!--bird friendly-->
					<div class="item item-4 col-md-3 col-sm-3 col-xs-12">
						<div class="item-inner">
							<h3 class="item-heading">SIMBOLO DE PEQUEÑOS PRODUCTORES</h3>
								<div class="price-desc">
									<p> Procedimiento para la inspección y certificación de las normas de Símbolo de Pequeños Productores</br></br></br></p>
								</div>
							<a class="btn btn-cta" href="#">Lee más</a>
						</div>
					</div><!-- simbolo de pequeños -->
				</div>
			</div>
    </div><!--//procedimientos section-->
    
    <div id="ultimasn" class="procedimientos-section">
        <div class="container text-center">
            <h2 class="section-title">ULTIMAS NOTICIAS</h2>
            <div class="intro">AQUI FALTAN COSAS</div>
			
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
											echo "<div class=\"tab-pane fade\" id=\"$fila[0]\">";
												echo "<div class\"\"><h2> $fila[1]</h2></div>";
												echo "<div class\"\"><div class=\"col-md-4 col-sm-4 col-xs-12\" style='overflow:hidden'><img src=\"certimex/$fila[3]\" width=\"300\"/></div>";
												echo "<div class=\"col-md-8 col-sm-4 col-xs-12\"><p align=\"justify\"> $fila[4]</p></div></div>";
												echo "<div class=\"\"><p align=\"left\">$fila[2]</p></div>";
											echo "</div>";
										}
								?>
							</div>
                        </div> <!-- /panel-body-->
                    </div>
                </div>
							
        </div><!--//container-->
    </div><!--//ULTIMAS NOTICIAS SECCION-->
	
	
	
    <div id="contact" class="contact-section">
        <div class="container text-center">
            <h2 class="section-title">Contáctanos</h2>
           
                <div class="item item-3 col-md-4 col-sm-4 col-xs-12">
					<p> Direccion</p>
					<p>Calle 16 de Septiembre 204, Colonia Ejido Guadalupe Victoria, Oaxaca de Juárez, Oaxaca, México.</p>
				
				</div>
				<div class="item item-6 col-md-4 col-sm-4 col-sx-12">
					<p>Telefono</p>
					<p>01 951 520 2687 - 01 951 520 0617</p>
				</div>
				<div class="item item-7 col-md-4 col-sm-4 col-sx-12">
					<p> Correo </p>
					<p>Certimex@certimexsc.com</p>
				</div>  
        </div><!--//container-->
		<div class="container text-left">
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
		</div>
    </div><!--//contact-section-->
    
    <footer class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
            
            
        </div><!--//container-->
    </footer>
     
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>     
    <script type="text/javascript" src="assets/js/main.js"></script> 
       
</body>
</html> 

