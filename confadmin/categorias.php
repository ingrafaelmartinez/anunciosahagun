<?php include 'scripts/funciones.php';

Conectar();

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
      <h2>LISTA DE CATEGORIAS</h2>
      <a href="nuevacat.php">Nueva Categoria</a>
      <br>
      <hr>
      <?php $infocat = ListarCategoria();  ?>
      <table>
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($infocat as $valor): ?>
            <tr>
              <td><?=$valor[0]?></td>
              <td><?=$valor[1]?></td>            
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </section>
    <footer>&copy 2018</footer>
  </body>
</html>
