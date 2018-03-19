<?php
include 'header.php';
include 'menu.php';
include 'barrasuperior.php';
?>
    <section>
      <h2>LISTA DE CATEGORIAS</h2>
      <a href="nuevacat">Nueva Categoria</a>
      <br>
      <hr>

      <table>
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
            $categoria = new gestorCategoria();
            $categoria->listaCategoria();
           ?>


        </tbody>
      </table>
    </section>
    <?php
    include 'footer.php';
     ?>
