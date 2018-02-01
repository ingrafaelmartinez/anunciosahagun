<?php
include 'funciones.php';


if (isset($_POST['txtnom']) && isset($_POST['txtnit']) && isset($_POST['txttel'])&&
isset($_POST['txtemail'])&& isset($_POST['txtpass'])&& isset($_POST['txtdir'])&&
 isset($_POST['txtciu'])&& isset($_POST['txtdep']) && isset($_POST['txtpais'])) {

   $nit = htmlentities(addslashes($_POST['txtnit']),ENT_QUOTES);
   $nom = htmlentities(addslashes($_POST['txtnom']),ENT_QUOTES);
   $email = htmlentities(addslashes($_POST['txtemail']),ENT_QUOTES);
   $pass = sha1(htmlentities(addslashes($_POST['txtpass']),ENT_QUOTES));
   $tel = htmlentities(addslashes($_POST['txttel']),ENT_QUOTES);
   $dir = htmlentities(addslashes($_POST['txtdir']),ENT_QUOTES);
   $ciu = htmlentities(addslashes($_POST['txtciu']),ENT_QUOTES);
   $dep = htmlentities(addslashes($_POST['txtdep']),ENT_QUOTES);
   $pais = htmlentities(addslashes($_POST['txtpais']),ENT_QUOTES);
}
Conectar();


if (veriEmail($email)) {
  ?>

  <script>
    alert('ESTE USUARIO YA SE ENCUANTRA REGISTRADO');
   location.href="../registro.php";
  </script>

  <?php


}else {
NuevoRegistro($nom,$nit,$email,$pass,$tel,$dir,$ciu,$dep,$pais);
IniciarSecion($email,$pass);
header('location: ../principal.php');
}



 ?>
