<?php
include 'scripts/funciones.php';
Conectar();
if (isset($_GET['cat'])) {
  $id = $_GET['cat'];
}
$cat = VerCategoria($id);
 ?>

 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/styles.css">
     <title>Cuponera Sahagún</title>
   </head>
   <body>
    <?php include("includes/header.php") ?><!-- / #main-header -->


   <section id="main-content">
     </header>
 <div class="contenedor">


    <?php include("includes/categoria.php"); ?>

     <section>
       <?php foreach ($cat as $valor): ?>
         <?php
         $id = $valor[1] ;
         $vende = GetVendedor($id);
         ?>
         <div>
            <a href="verOferta.php?prod=<?=$valor[0]?>"><img src="photo/<?=$valor[8]?>"><a/>
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


       <?php endforeach; ?>
       <section>

       </section>

     </section>

 </div>
 <?php include 'includes/footer.php'; Desconectar();?>
