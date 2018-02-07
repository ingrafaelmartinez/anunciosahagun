<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
}
$id = $_SESSION['id'];
$listaOferta = AnuncioEmpresa($id);
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
      <li><a href="anuncio.php">Anuncios<a/></li>
      <li><a href="nuevAnunc.php">Nuevo Anuncio</a></li>
      <li><a href="condic.php">Condiciones de ventas</a></li>
 		</ul>

    <br>


 	</nav>
 	<h2>PANEL DE VENDEDOR</h2>
  <table>
    <thead>
  <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Categoria</th>
    <th>Valor</th>
    <th>Fecha Inicio</th>
    <th>Fecha de Cierre</th>
    <th>Cantidad</th>
    <th>Accion</th>
  </tr>
    </thead>
    <tbody>
      <?php $i = 1; foreach ($listaOferta as $valor): ?>
        <?php
        $id = $valor[2];
        $cate = ListarCategoriId($id)
         ?>
      <tr>
        <td><?=$i++?></td>
        <td><?=$valor[3]?></td>
        <?php foreach ($cate as $val): ?>
        <td><?=$val[1] ?></td>
        <?php endforeach; ?>

        <td><?=$valor[4]?></td>
        <td><?=$valor[5]?></td>
        <td><?=$valor[6]?></td>
        <td><?=$valor[7]?></td>
        <td><a href="EditarOferta.php?id=<?=$valor[0]?>">Editar</a></td>
        <td><a href="">Eliminar</a></td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>


 </body>
 </html>
