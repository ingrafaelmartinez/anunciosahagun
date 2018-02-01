<?php
include 'scripts/funciones.php';
if (!HaIniciadoSesion()) {
  header('location: index.php');
}
Conectar();
$id = $_SESSION['id'];
$inf = InfEmpresa($id);
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
      <li><a href="valVenta.php">Validar Venta</a></li>
      <li><a href="nuevAnunc.php">Nuevo Anuncio</a></li>
      <li><a href="condic.php">Condiciones de ventas</a></li>
    </ul>

    <br>
  </nav>
  <h2>Datos empresa</h2>
  <table class="table">

    <thead>
      <tr>
        <th><h3>Informacion del Empresa/h3> </th>
          <?php foreach ($inf as $valor): ?>


      </tr>
    </thead>
    <tbody>
      <tr>

        <td><h4>Empresa: <?=$valor[1]?></h4></td>

        <td><h4>Pais:</h4></td>
        <td><h4>Departamento:</h4></td>
      </tr>
      <tr>
        <td><h4>Ciudad:</h4></td>
        <td><h4>Direccion:</h4></td>
        <td><h4>Telefono: </h4></td>
      </tr>

      <tr>
        <tr>
          <td><h4>:</h4> </td>
          <td><h4>:</td>
          <td></td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
        </tbody>
  <?php endforeach; ?>
      </table>



 </body>
 </html>
