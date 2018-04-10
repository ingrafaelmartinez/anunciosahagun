<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="Tienda Virtual">
	  <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia">
	  <meta name="keyword" content="Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse">
    <title>OFERTAS SAHAGUN</title>
    <?php

      session_start();

      $servidor = Ruta::ctrRutaServidor();

      $icono = ControladorPlantilla::ctrEstiloPlantilla();

      $url = Ruta::ctrRuta();

      echo '<link rel="icon" href="'.$url.$icono["icono"].'">';




     ?>
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
	  <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.scrollUp.js"></script>
  </head>
  <body>
  <?php
    #cabezote
    include 'modulos/cabezote.php';
      $rutas = array();
      $ruta = null;
      $infoproducto = null;

      if (isset($_GET["ruta"])) {
            $rutas = explode("/",$_GET["ruta"]);

            $item = "ruta";
            $valor = $rutas[0];

            $rutaCategoria = ControladorProductos::ctrMostrarCategorias($item,$valor);

            if($rutas[0] == $rutaCategoria["ruta"]){

              $ruta = $rutas[0];

            }
            #URL AMIGABLES DE SUBCATEGORIA
            $rutaSubCategoria = ControladorProductos::ctrMostrarSubCategorias($item,$valor);

            foreach ($rutaSubCategoria as $key => $value) {

              if($rutas[0] == $value["ruta"]) {

                $ruta = $rutas[0];

              }
            }
            #URL DE INF PRODUCTOS
            $rutaProductos = ControladorProductos::crtMostrarInforProducto($item, $valor);

            if($rutas[0] == $rutaProductos["ruta"]){

              $infoproducto = $rutas[0];

            }



            #URL BLANCAS
              if($ruta != null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendido" || $rutas[0] == "lo-mas-visto" ){

                      include 'modulos/productos.php';

                  }elseif ($infoproducto != null) {

                      include 'modulos/infoproducto.php';

                  }elseif ($rutas[0] == "buscador") {

                      include 'modulos/buscador.php';

                  }else {

                        include 'modulos/error404.php';

              }
      }else {
        include 'modulos/slide.php';
        include 'modulos/destacados.php';
      }

   ?>
   <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">

   <script src="<?php echo $url ?>vistas/js/cabezote.js"></script>
   <script src="<?php echo $url ?>vistas/js/plantilla.js"></script>
   <script src="<?php echo $url ?>vistas/js/slide.js"></script>
   <script src="<?php echo $url ?>vistas/js/buscador.js"></script>

  </body>
</html>
