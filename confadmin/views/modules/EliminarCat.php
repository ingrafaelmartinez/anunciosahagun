<?php
session_start();

if (!$_SESSION["validar"]) {
  # redirecionamos
  header('location:ingreso');
  exit();
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <link rel="icon" href="http://localhost:8080/anunciosahagun/confadmin/views/images/icono.jpg">

      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/font-awesome.min.css">
      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/style.css">
      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/fonts.css">
      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/responsive.bootstrap.min.css">
      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/jquery-ui.min.css">
      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/sweetalert.css">
      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/cssFancybox/jquery.fancybox.css">
      <link rel="stylesheet" href="http://localhost:8080/anunciosahagun/confadmin/views/css/jquery-ui.min.css">

      <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/jquery-2.2.0.min.js"></script>
      <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/bootstrap.min.js"></script>
      <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/jquery.fancybox.js"></script>
      <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/jquery.dataTables.min.js"></script>
      <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/dataTables.bootstrap.min.js"></script>
      <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/dataTables.responsive.min.js"></script>
      <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/responsive.bootstrap.min.js"></script>
      <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/jquery-ui.min.js"></script>
      <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/sweetalert.min.js"></script>
    <title>panel</title>
  </head>
  <body>

  	<div class="container-fluid">

  		<section class="row">

  		<!--=====================================
  		COLUMNA BOTONERA
  		======================================-->

  			<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12" id="col1">

  				<div id="logo" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

  					<img src="http://localhost:8080/anunciosahagun/confadmin/views/images/logotipo.jpg" class="img-responsive" alt="Image">


  				</div>

  				<!--=====================================
  				BOTONERA MOVIL
  				======================================-->

  				<div id="botoneraMovil" class="navbar-header navbar-inverse">

  					<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#botonera">

  						<span class="icon-bar"></span>
  	            		<span class="icon-bar"></span>
  	           			<span class="icon-bar"></span>

  					</button>

  				</div>

  				<!--====  Fin de BOTONERA MOVIL  ====-->

  				<nav id="botonera" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 collapse navbar-collapse text-center">

  					<ul class="nav navbar">

  						<li><a href="http://localhost:8080/anunciosahagun/confadmin/principal">Inicio <span class="glyphicon glyphicon-new-window"></span></a></li>
  						<li><a href="http://localhost:8080/anunciosahagun/confadmin/baner">Baner <span class="glyphicon glyphicon-new-window"></span></a></li>
  						<li><a href="http://localhost:8080/anunciosahagun/confadmin/categorias">Categoria<span class="glyphicon glyphicon-new-window"></span></a></li>
  						<li><a href="http://localhost:8080/anunciosahagun/confadmin/articulos">Artículos <span class="glyphicon glyphicon-new-window"></span></a></li>
  						<li><a href="http://localhost:8080/anunciosahagun/confadmin/galeria">Imágenes <span class="glyphicon glyphicon-new-window"></span></a></li>
  						<li><a href="http://localhost:8080/anunciosahagun/confadmin/videos">Videos <span class="glyphicon glyphicon-new-window"></span></a></li>
  						<li><a href="http://localhost:8080/anunciosahagun/confadmin/usuarios">Usuario <span class="glyphicon glyphicon-new-window"></span></a></li>
              <li><a href="http://localhost:8080/anunciosahagun/confadmin/suscriptores">Suscriptores <span class="glyphicon glyphicon-new-window"></span></a></li>

  					</ul>

  				</nav>

  			</div>

<div id="cabezote" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

					<ul>
						<li  style="background: #333">
							<a href="mensajes" style="color: #fff">
                  			<i class="fa fa-envelope"></i>
                  			<span>1</span>
                			</a>
						</li>

						<li  style="background: #333">
							<a href="suscriptores" style="color: #fff">
                  			<i class="fa fa-bell"></i>
                  			<span>1</span>
                			</a>
						</li>

					</ul>

				</div>

				<div id="time" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">


					<div class="text-center">Lunes, 12 de Septiembre de 2016</div>
					<div class="text-center">12:56:00 pm </div>

				</div>

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-right">

					<img src="http://localhost:8080/anunciosahagun/confadmin/views/images/photo.jpg" class="img-circle">

					<p id="member"><?php echo $_SESSION["usuario"]; ?>  <span class="fa fa-chevron-down"></span>
						<br>
						<ol id="admin">
							<li><a href="perfil"><span class="fa fa-user"></span>Editar Perfil</a></li>
							<li><a href=""><span class="fa fa-file-text"></span>Términos y Condiciones</a></li>
							<li><a href="salir"><span class="fa fa-times"></span>Salir</a></li>
						</ol>

					</p>

				</div>

			</div>


    <section>
      <h2>EDITAR CATEGORIAS</h2>
      <a href="http://localhost:8080/anunciosahagun/confadmin/categorias"><h3>cancelar</h3></a>
      <br>
      <hr>
        <form class="" method="post" >
        <label for="">Nombre categoria</label>
        <?php
          $elim = new gestorCategoria();
          $elim->verCategoriaController();
          $elim->EliminarCategoriaController();
         ?>
         <input type="submit" name="Eliminar" value="Eliminar">


      </form>
      <section>


    </div>
  <footer>&copy 2018</footer>
  <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/script.js"></script>
  <script src="http://localhost:8080/anunciosahagun/confadmin/views/js/gestorSlide.js"></script>
  </body>
  </html>
