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
    <h1>anuncios</h1>
    <ul>
      <li><?php echo $_SESSION['email']; ?></li>
      <li><a href="config.php">Configuraciones</a></li>
      <li><a href="scripts/salir.php">Salir<a/></li>
    </ul>
 	</header>
 	<nav>
 		<ul>
 			<li><a href="public.php">Anuncios Publicados</a></li>
      <li><a href="venta.php">Ventas</a></li>
      <li><a href="valVenta.php">Validar Venta</a></li>
      <li><a href="anuncio.php">Anuncios<a/></li>
      <li><a href="nuevAnunc.php">Nuevo Anuncio</a></li>
      <li><a href="condic.php">Condiciones de ventas</a></li>
 		</ul>

    <br>


 	</nav>
 	<h2>PANEL DE VENDEDOR</h2>


 </body>
 </html>
