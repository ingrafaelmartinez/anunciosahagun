<?php
include 'funciones.php';
if (!HaIniciadoSesion()) {
   header('location: ../../index.php');
}


if (isset($_POST['txtEsta'])== 1) {
  $id = htmlentities(addslashes($_POST['txtid']));
  $est = false;
 echo "descativado";
}else {
  ?>
  <script type="text/javascript">
    alert('No a marcado la opcion Desactivar');
    location.href="../desactoferta.php?id=<?=$_POST['txtid']?>";
  </script>
  <?php
}

Conectar();

EstadoOferta($id,$est);
Desconectar();
header('location: ../anuncio.php');



 ?>
