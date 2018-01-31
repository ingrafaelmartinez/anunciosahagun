<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Cuenta</title>
 </head>
 <body>
 	<header>

 	</header>
 	<nav>
 		<ul>
 			<li><a href="nuevAnunc.php">Anuncio</a></li>
      <li><a href="scripts/salir.php">Salir<a/></li>
 		</ul>
    <?php echo $_SESSION['email']; ?>
    <br>
    <?php echo $_SESSION['id']; ?>

 	</nav>
 	<h2>PANEL DE VENDEDOR</h2>


 </body>
 </html>
