<?php
include 'funciones.php';
Conectar();

if (empty($_POST['txtEmail']) && empty($_POST['txtPass'])) {
  ?>
  <script type="text/javascript">
    alert('DEBE INGRESAR EMAIL Y CONTRASEÑA');
    location.href="../Login.php";
  </script>
  <?php
}else {
  $email = htmlentities(addslashes($_POST['txtEmail']),ENT_QUOTES);
  $pass = sha1(htmlentities(addslashes($_POST['txtPass']),ENT_QUOTES));
  if (IniciarSecion($email,$pass)) {
    Desconectar();
  header('location: ../principal.php');
  }else {
    header('location: ../Login.php?error=1');
  }
}




 ?>
