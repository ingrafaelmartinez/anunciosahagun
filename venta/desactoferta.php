<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
}
if (isset($_GET['id'])) {
  $id = htmlentities(addslashes($_GET['id']));
}
$oferta = OfertaId($id);
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
  <h2><a href="anuncio.php">Cancelar</a></h2>
<section>
  <?php foreach ($oferta as $valor): ?>
    <img src="../photo/<?=$valor[8]?>" alt="">
    <h2>Nombre: </h2> <h3><?=$valor[3]?></h3>
    <h2>fecha incio </h2><?=$valor[5]?>
    <h2>fecha Cierre </h2><?=$valor[6]?>
    <h2>Cantidad</h2><?=$valor[7]?>
    <h2>Incluye</h2><?=$valor[9]?>
    <h2>Condiciones</h2><?=$valor[10]?>
    <form class="" action="scripts/desoferta.php" method="post">
      <input type="hidden" name="txtid" value="<?=$valor[0]?>">
      Desactivar oferta:
      <input type="checkbox" name="txtEsta" value="1"><br>
      <input type="submit" name="Desactivar" value="Desactivar">
    </form>
  <?php endforeach; ?>
</section>
</body>
</html>
