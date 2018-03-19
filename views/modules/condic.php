<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
  header('location:  index.php');
}
$id = $_SESSION['id'];
$condic = CondicionEmp($id);

?>
 <?php include 'include/header.php'; ?>
    <section>
      <a href="regcond.php">Nuevo registro</a>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Descripcion</th>
            <th>Edicion</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; foreach ($condic as $valor): ?>
            <tr>
              <td><?=$i++;?></td>
              <td><?=$valor[2]?></td>
              <td><a href="EditCond.php?id=<?=$valor[0]?>">Editar<a/></td>
              <td><a href="scripts/ElimCond.php?id=<?=$valor[0]?>">Eliminar</a></td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </section>
  </body>
</html>
