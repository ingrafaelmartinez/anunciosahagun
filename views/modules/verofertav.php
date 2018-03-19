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
  <?php include 'include/header.php'; ?>
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
    <h2>Estado Oferta : <?php if($valor[11]=='1'){ echo "Activa"; }else {
      echo "Inactiva";
    }; ?></h2>
  <?php endforeach; ?>
</section>
</body>
</html>
