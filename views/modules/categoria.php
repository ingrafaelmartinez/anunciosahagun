<section id="main-content">
  <div class="contenedor">
    <aside class="categorias">
      <!-- aqui el menú de categorias -->
      <h2>Categorías</h2>
      <ul id="category-list">
        <?php
          $cate = new Categorias();
          $cate->ListaCategoria();
         ?>

      </ul>
    </aside>
  </div>
</section>
