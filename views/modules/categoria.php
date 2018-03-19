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
