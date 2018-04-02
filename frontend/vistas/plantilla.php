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
      $servidor = Ruta::ctrRutaServidor();
      $icono = ControladorPlantilla::ctrEstiloPlantilla();
      echo '<link rel="icon" href="'.$icono["icono"].'">';


      $url = Ruta::ctrRuta();

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
    <script src="<?php echo $url; ?>vistasjs/plugins/bootstrap.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>
  </head>
  <body>
  <?php
    #cabezote
    include 'modulos/cabezote.php';
      $rutas = array();
      $ruta = null;

      if (isset($_GET["ruta"])) {
          $rutas = explode("/",$_GET["ruta"]);

          $item = "ruta";
          $valor = $rutas[0];

          $rutaCategoria = ControladorProductos::ctrMostrarCategorias($item,$valor);

          if($rutas[0] == $rutaCategoria["ruta"]){

            $ruta = $rutas[0];

          }

          $rutaSubCategoria = ControladorProductos::ctrMostrarSubCategorias($item,$valor);

          foreach ($rutaSubCategoria as $key => $value) {

            if($rutas[0] == $value["ruta"]) {

              $ruta = $rutas[0];

            }
          }

            if($ruta != null){
              include 'modulos/productos.php';
              }else {
              include 'modulos/error404.php';
            }
      }else {
        include 'modulos/slide.php';
        include 'modulos/destacados.php';
      }

   ?>

   <script src="<?php $url ?>vistas/js/cabezote.js"></script>
   <script src="<?php $url ?>vistas/js/plantilla.js"></script>
   <script src="<?php $url ?>vistas/js/slide.js"></script>

  </body>
</html>
