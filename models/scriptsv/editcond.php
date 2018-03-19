<?php
include 'funciones.php';

if (empty($_POST['txtId'])) {
  ?>
  <script type="text/javascript">

    alert('ENVIANDO INFORMACION ACTERADA POR CODIGO');
    location.href="../condic.php";
  </script>

  <?php
}elseif (empty($_POST['txtcond'])) {
  ?>

  <script type="text/javascript">
    alert('CAMPO DESCRIPCION VACIO');
    location.href="../condic.php";
  </script>

  <?php
}else {
  Conectar();
  $id = htmlentities(addslashes($_POST['txtId']),ENT_QUOTES);
  $desc = htmlentities(addslashes($_POST['txtcond']),ENT_QUOTES);

  EditarCondicion($id,$desc);
  header('location: ../condic.php');
  Desconectar();
}

 ?>
