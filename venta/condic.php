<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
  header('location:  index.php');
}
$id = $_SESSION['id'];
$condic = CondicionEmp($id);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Condiciones</title>
  </head>
  <body>
    <header>
      <h1>anuncios</h1>
      <ul>
        <li><a href="config.php">Configuraciones</a></li>
        <li><a href="scripts/salir.php">Salir<a/></li>
      </ul>
   	</header>
   	<nav>
   		<ul>
   			<li><a href="public.php">Anuncios Publicados</a></li>
        <li><a href="venta.php">Ventas</a></li>
        <li><a href="confVent.php">Validar Venta</a></li>
        <li><a href="nuevAnunc.php">Nuevo Anuncio</a></li>
        <li><a href="condic.php">Condiciones de ventas</a></li>
   		</ul>
    </nav>
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
