<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Condiciones</title>
  </head>
  <body>
    <header>
      <h1>anuncios</h1>
      <ul>
        <li><a href="config.php">Configuraciones</a></li>
        <li><a href="scripts/salir.php">Salir<a/></li>
      </ul>
   	</header>
   	<nav>
   		<ul>
   			<li><a href="public.php">Anuncios Publicados</a></li>
        <li><a href="venta.php">Ventas</a></li>
        <li><a href="confVent.php">Validar Venta</a></li>
        <li><a href="nuevAnunc.php">Nuevo Anuncio</a></li>
        <li><a href="condic.php">Condiciones de ventas</a></li>
   		</ul>
    </nav>
    <section>
      <a href="regcond.php">Nuevo registro</a>
      <table>
        <thead>

        </thead>
        <tbody>

        </tbody>
      </table>
    </section>
  </body>
</html>
