<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CERTIMEX MODO ADMINISTRADOR</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CERTIMEX</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Administrador</a>
                        </li>
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> -->
                        <!-- </li> -->
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
		
		
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard"></i> Administrador</a>
                    </li>
                    <li>
                        <a href="acerca.html"><i class="fa fa-desktop"></i>Acerca de</a>
                    </li>
					<li>
                        <a href="servicios.html"><i class="fa fa-bar-chart-o"></i>Servicios</a>
                    </li>
                    <li>
                        <a href="procedimientos.html"><i class="fa fa-qrcode"></i>Procedimientos</a>
                    </li>
                    
                    <li>
                        <a href="noticias.html"><i class="fa fa-table"></i>Noticias</a>
                    </li>
                    <li>
                        <a href="directorio.html"><i class="fa fa-edit"></i> Directorio </a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Bienvenido! <small> Usted pordrá editar el contenido de las secciones de la izquierda </small>
                        </h1>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-6">
						
						<form role="form" name="subirImg" enctype="multipart/form-data" method="post" action="../Procesos/uploader.php">
							<h2>Nueva Noticia</h2>
							<input type="Text" name="titulo" placeholder="Titulo de la Noticia" required/>
							<input type="file" name="imagen" id="imagen" required/>
							<input type="Text" name="contenido" id="contenido" placeholder="Contenido de la Noticia" required/>
							<input type="date" name="fecha" step="1" min="2017-01-01" max="2017-12-31" value="<?php echo date("Y-m-d");?>"/>
							<input type="submit" name="subirBtn" id="subirBtn" value="Subir imagen" required/>
							
						</form>
						
					</div>
					<div class="col-md-3"></div>
					<div class="col-md-3">
						Ultimas Noticias
					</div>
				
				</div><!-- /row-->
                <!-- /. ROW  -->
				<footer><p>Soporte Técnico.  <a href="#">www.Malpika.com</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>