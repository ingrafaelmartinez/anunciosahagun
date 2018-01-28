<?php
 include 'scripts/funciones.php';
 // include 'scripts/conexion.php';
 // include 'scripts/funciones.class.php';

Conectar();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Cuponera Sahagún</title>
  </head>
  <body>

    <?php include("includes/header.php") ?>


    <section id="main-content">
      <div class="contenedor">
        <aside class="categorias">
          <!-- aqui el menú de categorias -->
          <h2>Categorías</h2>
          <ul id="category-list">
            <?php
            //$categoria = new funciones($base);
            $infocat = ListarCategoria();
            foreach ($infocat as $valor): ?>
              <li><a href="vercat.php?cat=<?=$valor[0]?>"><?=$valor[1]?></a></li>
              <hr>
            <?php endforeach; ?>
          </ul>
        </aside>
      </div>
    </section>

    <section>
      <h2></h2>
      <div class="">

      </div>
      <!-- aqui el section para los anuncios -->
    </section>

    <section>
      <!-- aqui el section para los anuncios -->
    </section>

    <?php include("includes/footer.php") ?>

  </body>
</html>
