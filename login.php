<?php 
session_start();


if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	
}else{print "<script>window.location='index.php';</script>";}

?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!-- Style CSS -->
	<link href="style.css" rel="stylesheet">
	<link href="css/colors.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5shiv.js"></script>
	  <script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/ico/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="assets/ico/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="assets/ico/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png">

</head>
<body>
	<div id="wrapper">
	<div class="topbar">
    	<div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

            </div><!-- end col-lg-6 -->
            </div><!-- end col-lg-6 -->
        </div><!-- end container -->
    </div><!-- end topbar -->

	<header class="header-wrapper">
    	<div class="container">
        	<div class="site-header clearfix">
                <div class="col-lg-3 col-md-3 col-sm-12 title-area pull-left">
                </div><!-- title area -->
                <div class="col-lg-9 col-md-9 col-sm-12">
                   <div id="nav">
                        <div class="container clearfix">
                            <ul id="jetmenu" class="jetmenu blue">
                                <li class="active"><a href="index.php"><i class="fa fa-home"></i> Inicio</a>
                                </li>
                   <li><a href="#"><i class="fa fa-road"></i> Vehiculos</a></li>
                                 <li><a href="#"><i class="fa fa-usd"></i> Propiedades</a></li>
                                 <li><a href="#"><i class="fa fa-shopping-cart"></i> Tienda</a></li>
                                <li><a href="#"><i class="fa fa-user"></i> Personaje</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> Contacto</a></li>
                            </ul>
                        </div>
                    </div><!-- nav -->   
              	</div><!-- end col 9 --> 
			</div><!-- end site header -->
    	</div><!-- end container -->         
	</header><!-- end header-wrapper -->

	<section class="post-wrapper-top dm-shadow">
    	<div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="#">Sitio</a></li>
                    <li>Ingreso y Registro</li>
                </ul><!-- end breadcrumb -->
                <h2>Ingresar / Registrarse</h2>
            </div><!-- end col-12 -->
        </div><!-- end container -->
	</section><!-- end post-wrapper-top -->
    
	<section class="section-single">
    	<div class="container">
			<div class="fullwidth-post-wrapper col-lg-12">

				<div class="general_wrapper clearfix">
				<div class="col-lg-6 col-md-6 col-sm-12">
                	<div class="widget-title">
                    	<h3>Ingresar</h3>
                    </div>
                	<form id="loginform" method="post" name="login" action="php/login.php">
						<div class="form-group">
							<div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Nombre_Apellido"> 
                             
                               
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock"></i></span>
								<input type="password" class="form-control" id="password" required name="password" placeholder="Contraseña">
							</div>
						</div>
						
						<div class="form-group">
						<button type="submit" class="btn btn-primary">Ingresar</button>
						</div>
					</form>
                </div><!-- end login -->
                
				<div class="col-lg-6 col-md-6 col-sm-12">
                	<div class="widget-title">
                    	<h3>Cuenta Nueva</h3>
                    </div>
                	<form id="registerform" method="post" name="registro" action="php/registro.php">
						<div class="form-group">
							<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
						</div>
                        <div class="form-group">
                        <select class="form-control" id="genero" name="genero">
                             
                        	  <option required="required" value="0">Hombre</option>
                        	  <option required="required" value="1">Mujer</option>
                        	</select>
                            </div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="Repetir Contraseña">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Crear Cuenta">
						</div>
					</form>
				</div><!-- end register -->              
                </div><!-- end general_wrapper -->

			</div><!-- fullwidth-post-wrapper -->
		</div><!-- end container -->
    </section><!-- end section-single -->
       
	

	<section class="section-copyright dm-shadow text-center">
		<div class="container">
            <div class="back-to-top clearfix">
                <span><span class="dmtop"><i class="fa fa-arrow-up"></i></span></span>
            </div>
			<p>Copyright © 2016 New Clan Roleplay</p>
		</div><!-- end container -->
    </section><!-- end section-copyright -->
      
</div><!-- wrapper -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jetmenu.js"></script>
    <script src="js/jquery.fitvids.js"></script>    
	<script src="js/jquery.unveilEffects.js"></script>	
	<script src="js/retina-1.1.0.js"></script>
    <script src="js/application.js"></script>
  
</body>
</html>