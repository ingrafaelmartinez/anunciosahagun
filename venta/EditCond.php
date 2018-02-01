<?php
include 'scripts/funciones.php';
Conectar();
if (!HaIniciadoSesion()) {
  header('location: index.php');
}
if (isset($_GET['id'])) {
  $id = htmlentities(addslashes($_GET['id']),ENT_QUOTES);
}
$resul = VerCondicion($id);
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
      <li><a href="confVent.php">Validar Venta</a></li>
      <li><a href="nuevAnunc.php">Nuevo Anuncio</a></li>
      <li><a href="condic.php">Condiciones de ventas</a></li>
    </ul>
    <br>
   </nav>
   <section>
     <h2><a href="condic.php">Cancelar<a/></h2>

   </section>
     <section>
       <form class="" action="scripts/editcond.php" method="post">
         <?php foreach ($resul as $valor): ?>
           <input type="hidden" name="txtId" value="<?=$valor[0]?>">
           <label for="">Nueva Condiciones de servicio o venta</label><br>
           <input type="text" name="txtcond" value="<?=$valor[2]?>"><br>
           <input type="submit" name="Modificar" value="Modificar">
         <?php endforeach; ?>

       </form>
     </section>

   </body>
   <footer>
     &copy 2018
   </footer>
