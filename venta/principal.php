<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
}

 ?>
  <?php include 'include/header.php'; ?>
 	<h2>PANEL DE VENDEDOR</h2>


 </body>
 </html>
