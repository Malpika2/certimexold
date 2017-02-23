<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Flowers Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
	
	<link id="callCss" rel="stylesheet" href="themes/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8" />
	<link id="callCss" rel="stylesheet" href="themes/css/style.css" type="text/css" media="screen" charset="utf-8" />
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet">
	
</head>
<body data-spy="scroll" data-target=".navbar">
<div id="headerSection">
	<div class="container">	
		<h1 class="brand cntr">CERTIMEX</h1>
			<div class="cntr">
				<a href="#top"><img width="5%" src="Imagenes/certimex-logo.png" alt="icon-certimex"/><img width="12%" src="imagenes/certimex-slogan.png" alt="icon2-certimex"/></a>
			</div>
			<div class="navbar">
				<div class="nav-collapse">
					<ul class="nav">
						<li class="active">
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
					</ul>
				</div>
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
	</div>
	</div>
<!--Header Ends================================================ -->

<div id="carouselSection" class="cntr"> 
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="item active">
					<a class="cntr" href="#"><img src="themes/images/carousel/1.png" alt=""></a>
				</div>
				<div class="item">
					<a class="cntr" href="#"><img src="themes/images/carousel/2.png" alt=""></a>
				</div>
				<div class="item">
					<a class="cntr" href="#"><img src="themes/images/carousel/3.png" alt=""></a>
				</div>
				<div  class="item">
					<a class="cntr" href="#"><img src="themes/images/carousel/4.png" alt=""></a>
				</div>
				<div class="item">
					<a class="cntr" href="#"><img src="themes/images/carousel/5.png" alt=""></a>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
</div>

<!-- Sectionone block ends======================================== -->
 
<div id="acerca"> 
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


</div>

<!-- Our Services======================================== -->
<div id="servicios"> 	
<div class="container">	
		<h1 class="cntr">Our Services</h1>
		<div class="row">
		<div class="span4">
			<div class="thumbnail">
				            <div class="items-wrapper row">
			
				<div id="slider1" style="height:500px">
			<a class="buttons prev" href="#">&#60;</a>
				<div class="viewport" style="height:500px">>
					<ul class="overview">
					<?php
					include("Procesos/conexion.php");
						$sql = "SELECT * FROM servicios";
						$servicios= $mysqli->query($sql);
						while($fila = $servicios->fetch_row()){
							
							
							echo"<li><div><div><img class=\"\" src=\"Imagenes/cestosup.png\" alt=\"image\" style=\"width:280px\"></div>
											<div><img class=\"\" src=\"img_servicios/$fila[3]\" alt=\"image\" style=\"width:125px\"></div>
											<div><h3 class=\"item-title\">$fila[1]</h3></div>
											<div style=\"height:100px; overflow:scroll\"><p align=\"justify\" >$fila[2]</p></div>
											<div><img class=\"\" src=\"Imagenes/cestoinf.png\" style=\"width:280px\" alt=\"image\"></div>
							
							</div></li><li></li>";
						}
					?>
					</ul>
				</div>
			<a class="buttons next" href="#">&#62;</a>
			</div>
			
            </div><!--//items-wrapper-->
			</div>
			
		</div>
</div>
</div>
</div>

<!-- Our Portfolio======================================== --
<div id="portfolioSection">
<h1 class="cntr">Our Portfolio</h1>
<div class="container">	
	<ul class="nav nav-pills">
	<li class="active"><a href="#all" data-toggle="tab">ALL</a></li>
	<li class=""><a href="#new" data-toggle="tab">NEW</a></li>
	<li class=""><a href="#popular" data-toggle="tab">POPULAR</a></li>
	<li class=""><a href="#comingsoon" data-toggle="tab">COMING SOON</a></li>
	</ul>
<div class="clr"></div>
<div class="tabbable tabs">
<div class="tab-content label-primary">
	<div class="tab-pane active" id="all">
	<ul class="thumbnails">
	<li class="span3">
		<div class="thumbnail">
			<div class="blockDtl">
			<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
			<h4>Easy Interface</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
			</div>
		</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li><li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li><li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>	
	</ul>
	<div class="pagination pull-right">
	  <ul>
		<li><a href="#">Prev</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">Next</a></li>
	  </ul>
	</div>	
	</div>
	<div class="tab-pane" id="new">
	<ul class="thumbnails">
	<li class="span3">
		<div class="thumbnail">
			<div class="blockDtl">
			<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
			<h4>Easy Interface</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
			</div>
		</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li><li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li><li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/2.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>	
	</ul>
	
	</div>
	<div class="tab-pane" id="popular">
	<ul class="thumbnails">
	<li class="span3">
		<div class="thumbnail">
			<div class="blockDtl">
			<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
			<h4>Easy Interface</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
			</div>
		</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li><li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li><li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>	
	</ul>
	

	</div>
	<div class="tab-pane" id="comingsoon">
	<ul class="thumbnails">
	<li class="span3">
		<div class="thumbnail">
			<div class="blockDtl">
			<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
			<h4>Easy Interface</h4>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
			</div>
		</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li><li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li><li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>
		<li class="span3">
			<div class="thumbnail">
				<div class="blockDtl">
				<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
				<h4>Easy Interface</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
				</div>
			</div>
		</li>	
	</ul>
	

	</div>
</div>
</div>
</div>
</div>
<!-- ========================= -->
<!-- Contact Section --
<div id="blogSection">
<h1 class="cntr"> OUR BLOG</h1>
<div class="container">
<div class="row">
	<div class="span9">
		<div class="blogBlk">
		<div class="inner">
		<h1><a href="#" rel="bookmark" title="Permanent Link to Cras in odio nisi">Cras in odio nisi</a></h1>
		<p class="meta">Added by <a href="#" title="Posts by admin">admin</a> on <a href="#">November 14th, 2010</a>, filed under 
		<a href="#" title="View all posts in Category 3" rel="category">Design </a></p>
		<p><img src="themes/img/1.png" class="attachment-wide wp-post-image" alt="78" title="78"></p>
		<p>Vivamus commodo placerat libero, eget pulvinar felis lobortis in. Curabitur ac enim nibh. Cras in odio nisi. Fusce et augue velit. 
		Nulla convallis, ipsum vitae tristique pretium, sapien odio viverra quam, eget mollis diam risus ut mi. Nullam ultrices ornare nisl,
		 sagittis ullamcorper dolor rutrum vitae. Sed accumsan mauris eget elit dictum vitae dapibus nisl [...]</p>
		<p>
			<a href="#" title="Comment on Cras in odio nisi">4 Comments</a> | 
			<a href="#">Add Comments</a> | 
			<a href="#">More Details</a>
		</p>
		</div>
		<hr class="soften"/>
		<div class="inner">
		<h1><a href="#" rel="bookmark" title="Permanent Link to Cras in odio nisi">Cras in odio nisi</a></h1>
		<p class="meta">Added by <a href="#" title="Posts by admin">admin</a> on <a href="#">November 14th, 2010</a>, filed under <a href="#" title="View all posts in Category 3" rel="category">Category 3</a></p>
		<p><img src="themes/img/2.png" class="attachment-wide wp-post-image" alt="78" title="78"></p>
		<p>Vivamus commodo placerat libero, eget pulvinar felis lobortis in. Curabitur ac enim nibh. Cras in odio nisi. Fusce et augue velit. 
		Nulla convallis, ipsum vitae tristique pretium, sapien odio viverra quam, eget mollis diam risus ut mi. Nullam ultrices ornare nisl,
		 sagittis ullamcorper dolor rutrum vitae. Sed accumsan mauris eget elit dictum vitae dapibus nisl [...]</p>
		<p>
			<a href="#" title="Comment on Cras in odio nisi">4 Comments</a> | 
			<a href="#">Add Comments</a> | 
			<a href="#">More Details</a>
		</p>
		</div>
		<hr class="soften"/>
		<div class="inner">
		<h1><a href="#" rel="bookmark" title="Permanent Link to Cras in odio nisi">Cras in odio nisi</a></h1>
		<p class="meta">Added by <a href="#" title="Posts by admin">admin</a> on <a href="#">November 14th, 2010</a>, filed under <a href="#" title="View all posts in Category 3" rel="category">Category 3</a></p>
		<p><img src="themes/img/3.png" class="attachment-wide wp-post-image" alt="78" title="78"></p>
		<p>Vivamus commodo placerat libero, eget pulvinar felis lobortis in. Curabitur ac enim nibh. Cras in odio nisi. Fusce et augue velit. 
		Nulla convallis, ipsum vitae tristique pretium, sapien odio viverra quam, eget mollis diam risus ut mi. Nullam ultrices ornare nisl,
		 sagittis ullamcorper dolor rutrum vitae. Sed accumsan mauris eget elit dictum vitae dapibus nisl [...]</p>
		<p>
			<a href="#" title="Comment on Cras in odio nisi">4 Comments</a> | 
			<a href="#">Add Comments</a> | 
			<a href="#">More Details</a>
		</p>
		</div>
		</div>
		<div class="pagination pull-right">
			  <ul>
				<li><a href="#">Prev</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">Next</a></li>
			  </ul>
		</div>	
</div>


<!-- Sidebar comumn -->
<div class="span3">
	<div class="well well-small">
		<h4>Categories</h4>
		<ul>
			<li><a href="#">ALL</a></li>
			<li><a href="#">Design (14)</a></li>
			<li><a href="#">SEO (18)</a></li>
			<li><a href="#">Development (8)</a></li>
			<li><a href="#">Optimizations (4)</a></li>
			<li><a href="#">Customizations (18)</a></li>
			<li><a href="#">Media</a></li>
		</ul>
	</div>
	<div id="clients">
		<div class="thumbnail">
			<div class="blockDtl">
			<a href="#"><img src="themes/images/portfolio/1.jpg" alt=""></a>
			<h4>Download</h4>
			<a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br><strong>Download Now</strong></a>
			</div>
		</div>
	</div>
	<br>
	<div class="well well-small">
		<h4>Popular Posts</h4>
		<ul>
			<li><a href="#">Customizations</a></li>
			<li><a href="#">Media</a></li>
		</ul>
	</div>

	<div class="well well-small">
		<h4>Archives</h4>
		<ul>
			<li><a href="#">November 2012 (10)</a></li>
			<li><a href="#">October 2012 (19)</a></li>
			<li><a href="#">September 2012 (19)</a></li>
			<li><a href="#">August 2012 (22)</a></li>
			<li><a href="#">July 2012 (25)</a></li>
			<li><a href="#">June 2012 (19)</a></li>
			<li><a href="#">May 2012 (27)</a></li>
			<li><a href="#">April 2012 (15)</a></li>
			<li><a href="#">More...</a></li>
		</ul>
	</div>
</div>
</div>
	</div>
</div>
<!-- Contact Section -->
<div id="contactSection">
<h1 class="cntr">Contact Us</h1>
	<div class="container">	
		<div class="row">	
		<div class="span9">
			<div class="alert alert-error">( * )Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
			<form class="form-horizontal">
				<fieldset>
				  <div class="control-group">
					<label class="control-label" for="input01">Name</label>
					<div class="controls">
					  <input type="text" class="input-xlarge" id="input01">
					 
					</div>
				  </div>
				   <div class="control-group">
					<label class="control-label" for="input11">Email</label>
					<div class="controls">
					  <input type="text" class="input-xlarge" id="input11">
					 
					</div>
				  </div>
				   <div class="control-group">
					<label class="control-label" for="textarea">Messages</label>
					<div class="controls">
					  <textarea class="input-xlarge" id="textarea" rows="3" style="height:65px"></textarea>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="optionsCheckbox">Send me a copy</label>
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox" id="optionsCheckbox" value="option1">
					  </label>
					</div>
				  </div>
				  <div class="form-actions">
					<button type="submit" class="btn btn-success">send messages</button>
					<button class="btn">Cancel</button>
				  </div>
				</fieldset>
			  </form>
		</div> 
		<div class="span3">	
			<div>
				<h4>Tulip LLC</h4>
				<p>
					Tulip LLC Los Angeles
					102 W. 1st St.
					Los Angeles, CA 90011<br>
					Phone: 1234567891<br>
					Fax: 109876543212<br>
					Email: <a href="mailto:info@tulipllc.com">info@tulipllc.com</a><br>
					website: <a href="http://www.tulipllc.com">www.tulipllc.com</a>
				</p>
			</div>
			<br>
			<br>
			<div>
				<h4>Tulip LLC</h4>
				<p>
					Tulip LLC, Newyork
					231 NY. Mage St.
					Newyork, NY 80021<br>
					Phone: 3467236346<br>
					Fax: 7453734734<br>
					Email: <a href="mailto:info@tulipllc.com">info@tulipllc.com</a><br>
					website: <a href="http://www.tulipllc.com">www.tulipllc.com</a>
				</p>
			</div>
		</div>
		
		</div> 
		</div> 
</div> 
<!-- Wrapper end -->

<div id="footerSection">
	<div class="container">
	<div class="socialMedia">
		<a class="facebook" href="#"></a>
		<a class="twitter" href="#"></a>
	</div>
	<div id="footerMenu">
		<a href="#carouselSection">Home	</a>
		<a href="#ourServices">What we do?</a>
		<a href="#portfolioSection">Portfolio</a>
		<a href="#blogSection">Blog</a>
		<a href="#contactSection">Support</a>
	</div>
		<p><small>www.tuplipllc.com &copy; 2013 All rights reserved.</small></p>
	</div>
</div>
<a href="#" class="go-top" style="display: none;"><i class="icon-double-angle-up"></i></a>

<!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

<script src="themes/js/jquery-1.9.1.min.js"></script>
<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="themes/js/jquery.scrollTo-1.4.3.1-min.js" type="text/javascript"></script>
<script src="themes/js/jquery.easing-1.3.min.js"></script>
<script src="themes/js/default.js"></script> 
<script type="text/javascript">

	$('#testimonial').carousel({
	  interval: 10000
	})
	$('#myCarousel').carousel({
	  interval: 7000
	})
</script>
</body>
</html>