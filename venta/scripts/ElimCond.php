<?php
include 'funciones.php';
Conectar();

if (isset($_GET['id'])) {
  $id = htmlentities(addslashes($_GET['id']),ENT_QUOTES);
}else {
  echo '<div id="erro"><h2>ERROR DE ACCESO</h2></div>';
}
EliminarCondicion($id);
header('location: ../condic.php');
  ?>
