<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
}
$id = $_SESSION['id'];
$listaOferta = AnuncioEmpresa($id);
 ?>
  <?php include 'include/header.php'; ?>
 	<h2>PANEL DE VENDEDOR</h2>
  <table>
    <h2>Oferta activas</h2>
    <thead>
  <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Categoria</th>
    <th>Valor</th>
    <th>Fecha Inicio</th>
    <th>Fecha de Cierre</th>
    <th>Cantidad</th>
    <th>Estado</th>
    <th></th>
    <th>Accion</th>
  </tr>
    </thead>
    <tbody>
      <?php $i = 1; foreach ($listaOferta as $valor): ?>
        <?php if ($valor[11]=='1'): ?>


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
        <td><input type="checkbox" name="<?=$valor[11]?>" <?php if($valor[11]=='1') echo "checked" ?>></td>
        <?php if ($valor[11]=='1'){ ?>
           <td><a href="desactoferta.php?id=<?= $valor[0] ?>"><button type="button" name="button">Desactivar</button></a></td>
        <?php }else{ ?>
         <td><a href="activaroferta.php?id=<?= $valor[0] ?>"><button type="button" name="button">Activar</button></a></td>
       <?php } ?>
        <td><a href="EditarOferta.php?id=<?=$valor[0]?>">Editar</a></td>
        <td><a href="veroferta.php?id=<?=$valor[0]?>">Ver</a></td>
      </tr>
        <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
  </table>
  <hr>
  <table>
    <h2>Ofertas inactivas</h2>
    <thead>
  <tr>
    <th>#</th>
    <th>Nombre</th>
    <th>Categoria</th>
    <th>Valor</th>
    <th>Fecha Inicio</th>
    <th>Fecha de Cierre</th>
    <th>Cantidad</th>
    <th>Estado</th>
    <th></th>
    <th>Accion</th>
  </tr>
    </thead>
    <tbody>
      <?php $i = 1; foreach ($listaOferta as $valor): ?>
        <?php if ($valor[11]=='0'): ?>
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
        <td><input type="checkbox" name="<?=$valor[11]?>" <?php if($valor[11]=='1') echo "checked" ?>></td>
        <?php if ($valor[11]=='1'){ ?>
           <td><a href="desactoferta.php?id=<?= $valor[0] ?>"><button type="button" name="button">Desactivar</button></a></td>
        <?php }else{ ?>
         <td><a href="activaroferta.php?id=<?= $valor[0] ?>"><button type="button" name="button">Activar</button></a></td>
       <?php } ?>
        <td><a href="EditarOferta.php?id=<?=$valor[0]?>">Editar</a></td>
        <td><a href="veroferta.php?id=<?=$valor[0]?>">Ver</a></td>
      </tr>
      <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
  </table>


 </body>
 </html>
