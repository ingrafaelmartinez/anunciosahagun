<?php
include 'scripts/funciones.php';

if (isset($_GET['prod'])) {
  $id = htmlentities(addslashes($_GET['prod']));
}
Conectar();
$detalles =  DetallesOferta($id);

 ?>
 <?php include 'includes/header.php'; ?>
 <?php include 'includes/categoria.php'; ?>

  <section>
    <?php foreach ($detalles as $valor): ?>
      <?php
      $id = $valor[1] ;
      $vende = GetVendedor($id);
      ?>
      <div>
         <img src="photo/<?=$valor[8]?>">
         <h2><?=$valor[3]?></h2>
         <?php foreach ($vende as $k): ?>
         <h4>Vendedor: <?=$k[1]?></h4>
         <?php endforeach; ?>
         <h3>cantidad Disponible:  <strong><?=$valor[7]?></strong></h3>
         <time>Valido desde: <?=$valor[5]?> </time><br>
         <time>Hasta : <?=$valor[6]?></time><br>
         <h3>Valor: COP.$ <?= number_format($valor[4], 0, ",", "." )?></h3>
         <a href="comprar.php?prod=<?=$valor[0]?>"><button>Comprar</button></a>
       </div>
       <div class="">
         <h3>Incluye</h3>
         <p><?=$valor[9]?></p>
       </div>
       <div class="">
         <h3>Condiciones</h3>
         <p><?=$valor[10]?></p>
       </div>
    <?php endforeach; ?>
  </section>




 <?php include 'includes/footer.php'; Desconectar();?>
