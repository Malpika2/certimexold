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
	<link rel="stylesheet" href="themes/font-awesome/css/font-awesome.min.css">
	<!--[if IE 7]>
	  <link rel="stylesheet" href="themes/font-awesome/css/font-awesome-ie7.css">
	<![endif]-->
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<!-- Imbeded font from Google -->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Start Bootstrap</h1>
            <h3>Free Bootstrap Themes &amp; Templates</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>
	
<body data-spy="scroll" data-target=".navbar">
	<div id="headerSection">
	<div class="container">
		<a class="scrollto" href="#carouselSection">
		<h1 class="brand cntr">
			<img width="50px" src="assets/images/certimex-logo.png" alt="icon-certimex"/><img width="100px" src="assets/images/certimex-slogan.png" alt="icon2-certimex"/>
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
<!--Header Ends================================================ -->



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
<script src="themes/js/jquery.scrollTo-1.4.3.1-min.js"></script>
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