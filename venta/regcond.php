<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
 }
$id = $_SESSION['id'];
$condic = CondicionEmp($id);


 ?>
<!DOCTYPE html>
<html>
<head>
 <title>Cuenta</title>
</head>
<body>
 <header>
   <h1>anuncios</h1>
   <ul>
     <li><?php echo $_SESSION['email']; ?></li>
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
   <br>
  </nav>
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
