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

      <link rel="icon" href="views/images/icono.jpg">

      <link rel="stylesheet" href="views/css/bootstrap.min.css">
      <link rel="stylesheet" href="views/css/font-awesome.min.css">
      <link rel="stylesheet" href="views/css/style.css">
      <link rel="stylesheet" href="views/css/fonts.css">
      <link rel="stylesheet" href="views/css/dataTables.bootstrap.min.css">
      <link rel="stylesheet" href="views/css/responsive.bootstrap.min.css">
      <link rel="stylesheet" href="views/css/jquery-ui.min.css">
      <link rel="stylesheet" href="views/css/sweetalert.css">
      <link rel="stylesheet" href="views/css/cssFancybox/jquery.fancybox.css">
      <link rel="stylesheet" href="views/css/jquery-ui.min.css">

      <script src="views/js/jquery-2.2.0.min.js"></script>
      <script src="views/js/bootstrap.min.js"></script>
      <script src="views/js/jquery.fancybox.js"></script>
      <script src="views/js/jquery.dataTables.min.js"></script>
      <script src="views/js/dataTables.bootstrap.min.js"></script>
      <script src="views/js/dataTables.responsive.min.js"></script>
      <script src="views/js/responsive.bootstrap.min.js"></script>
      <script src="views/js/jquery-ui.min.js"></script>
      <script src="views/js/sweetalert.min.js"></script>
    <title>panel</title>
  </head>
  
