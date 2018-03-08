<?php
include 'scripts/funciones.php';
Conectar();

if (isset($_GET['cat'])) {
  $id = $_GET['cat'];
}

$dato = ListarCategoriId($id);


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>categorias</title>
  </head>
  <body>
    <header>
      <h2>anunciossahagun</h2>
      <a href="#">salir</a>
    </header>
    <nav>
      <ul>
        <li><a href="categorias.php">Categorias</a></li>
        <li><a href="#">Clientes</a></li>
      </ul>
    </nav>

    <section>
      <h2>EDITAR CATEGORIAS</h2>
      <a href="Categoria.php">cancelar</a>
      <br>
      <hr>
      <form class="" action="scripts/editcat.php" method="post">
        <?php foreach ($dato as $valor): ?>
        <label for="">Nombre categoria</label>
        <input type="hidden" name="txtid" value="<?=$valor[0]?>">
        <input type="text" name="txtnom" value="<?=$valor[1]?>">
        <?php endforeach; ?>
        <input type="submit" name="Guardar" value="Editar">

      </form>
      <section>

      </section>
    <footer>&copy 2018</footer>
  </body>
</html>
