<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/carpusel.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
	<!-- Menu TULIP-->
	<link id="callCss" rel="stylesheet" href="themes/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
	<link id="callCss" rel="stylesheet" href="themes/css/style.css" type="text/css" media="screen" charset="utf-8" />
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link rel="stylesheet" href="themes/font-awesome/css/font-awesome.min.css">
	<!-- TEMA SECCIONES-->
	<link id="theme-style" rel="stylesheet" href="css/styles.css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll" data-target=".navbar">

    <!-- Navigation -->
	<div id="headerSection">
	<div class="container">
		<a class="scrollto" href="#top">
		<h1 class="brand cntr">
			<img width="50px" src="Imagenes/certimex-logo.png" alt="icon-certimex"/><img width="100px" src="imagenes/certimex-slogan.png" alt="icon2-certimex"/>
		</h1>
		</a>
		<div class="navbar">
			<div class="nav-collapse">
				<ul class="nav">
					<li class="active">
						<a href="#carouselSection">INICIO</a>
					</li>
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
				</ul>
			</div>
			
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
	</div>
	</div>
<!--Menu ends================================================ -->
<!--    -->
    <header id="top" class="header">			
		<div class="text-vertical-center">
			<div class="container">
			<div class="row">
				<!-- Carousel -->
				<div id="carousel-example-generic" class="carousel carousel-fade slide" data-ride="carousel" data-interval="10000">

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
									echo "<div class=\"header-text \">";
										echo "<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center\">";
											echo "<h2><span>$fila[0]</span></h2></br>";
											echo "<h3><span>$fila[1]</span></h3></br>";
											echo "<a class=\"btn btn-dark btn-lg\" href=\"$fila[2]\"> Saber más...</a>";
										echo "</div>";
									echo "</div>";
								echo "</div>";
							$conta++;
							}
						?>
					</div><!-- /carousel-inner-->

				</div><!-- /carousel -->
			</div>
			</div>
		</div>
	</header>
	<div id="acerca" class="acerca-section">
        <div class="container">
			<?php 
				$consulta="SELECT * FROM informacion";
				$resultado=$mysqli->query($consulta);
				$fila =$resultado->fetch_assoc();
				$titulo2= strtoupper($fila['titulo']);
				echo "<h2 class=\"section-title text-center\">$titulo2</h2>";
				echo "<blockquote>";
				echo nl2br("<p>$fila[informacion]</p>");
				echo "</blockquote>";
			?>
        </div><!--//container-->
    </div><!--//acerca ACERCA DE -->
    
	<!-- servicios"-->
    <div id="servicios" class="servicios-section">
        <div class="container">
            <h2 class="section-title">CERTIMEX</h2>
            
            <div class="items-wrapper row">
			<?php
			include("Procesos/conexion.php");
			$sql = "SELECT * FROM servicios";
			$servicios= $mysqli->query($sql);
			while($fila = $servicios->fetch_row()){
				
			echo "<div class=\"item col-sm-3 col-xs-12\">
                    <div class=\"item-inner\">
                        <div class=\"figure-holder\">
                            <img class=\"figure-image\" width=\"150px\" src=\"img_servicios/$fila[3]\" alt=\"image\">
                        </div><!--//figure-holder-->
                        <h3 class=\"item-title\">$fila[1]</h3>
                        <div class=\"item-desc\">
                            <p align=\"justify\">$fila[2]</p>
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->";
			}
			?>
            </div><!--//items-wrapper-->
			
			<div class="items-wrapper row">
                <div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="Imagenes/figure-1.png" alt="image">
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
                            <img class="figure-image" src="imagenes/figure-1.png" alt="image">
                        </div><!--//figure-holder-->
                        <h3 class="item-title">PROYECTOS CERTIFICADOS</h3>
                        <div class="item-desc">
							<a class="" href="http://www.certimexsc.com/operadores.php">Conoce los operadores certificados por CERTIMEX</a>
                        </div><!--//item-desc-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-sm-3 col-xs-12">
                    <div class="item-inner">
                        <div class="figure-holder">
                            <img class="figure-image" src="imagenes/figure-2.png" alt="image">
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
                            <img class="figure-image" src="imagenes/figure-3.png" alt="image">
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
    <!-- Footer -->
    <footer>
        <div class="container">
            
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

	<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->


	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
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
