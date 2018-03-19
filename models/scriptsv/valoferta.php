<?php

include 'funciones.php';
if (!HaIniciadoSesion()) {
   header('location: ../../index.php');
}

if (isset($_POST['txtEsta']) == 1) {
  $id = htmlentities(addslashes($_POST['txtid']));
  $est = true;

}else {
  ?>
  <script type="text/javascript">
    alert('No a marcado la opcion activar');
    location.href="../activaroferta.php?id=<?=$_POST['txtid']?>";
  </script>
  <?php
}

Conectar();
EstadoOferta($id,$est);
Desconectar();
header('location: ../anuncio.php');

 ?>
