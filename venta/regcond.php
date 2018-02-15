<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
 }
$id = $_SESSION['id'];
$condic = CondicionEmp($id);


 ?>
 <?php include 'include/header.php'; ?>
  <section>
    <h2><a href="condic.php">Cancelar<a/></h2>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Descripcion</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; foreach ($condic as $valor): ?>
          <tr>
            <td><?= $i++;?></td>
            <td><?=$valor[2]?></td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </section>
    <section>
      <form class="" action="scripts/regcond.php" method="post">
        <label for="">Nueva Condiciones de servicio o venta</label><br>
        <input type="text" name="txtcond" value=""><br>
        <input type="submit" name="Agregar" value="Agregar">
      </form>
    </section>

  </body>
  <footer>
    &copy 2018
  </footer>
