<?php
include 'funciones.php';
Conectar();

if (isset($_POST['txtemail']) && isset($_POST['txtpass'])) {
  $email = htmlentities(addslashes($_POST['txtemail']), ENT_QUORES);
  $pass = htmlentities(addslashes($_POST['txtpass']));
}




 ?>
