<?php
 include 'scripts/funciones.php';
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
    <header>
      <!-- el header aqui -->
      <nav>
        <ul>
          <li><a href="#">Registrar</a></li>
          <li><a href="#">Iniciar Sesión</a></li>
        </ul>
      </nav>
    </header>

    <aside class="categorias">
      <!-- aqui el menú de categorias -->
      <p>Categorías</p>
      <ul id="category-list">
        <?php
        $infocat = ListarCategoria();
        foreach ($infocat as $valor): ?>
          <li><a href="vercat.php?cat=<?=$valor[0]?>"><?=$valor[1]?></a></li>
        <?php endforeach; ?>

        <!-- <li><a href="#">Entretenimiento</a></li>
        <li><a href="#">Salud</a></li> -->
      </ul>
    </aside>

    <section>
      <!-- aqui el section para los anuncios -->
    </section>

    <section>
      <!-- aqui el section para los anuncios -->
    </section>

    <footer>
      <!-- El footer para los pies de páginas y conctactos -->
      <ul class="footer-social">
        <li class="footer-item">
          <a href="#" target="_blank">Facebook</a>
        </li>

        <li class="footer-item">
          <a href="#">Twitter</a>
        </li>
      </ul>


      <div class="copy">
        &copy 2018 Anuncio Sahagún
      </div>
    </footer>


  </body>
</html>
