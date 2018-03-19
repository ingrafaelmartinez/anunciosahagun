<?php
// include 'conexion.php';
// include 'usuario.class.php';
// include 'funciones.class.php';
include 'funciones.php';

$nom =  htmlentities(addslashes($_POST['txtnom']),ENT_QUOTES);
$ape = htmlentities(addslashes($_POST['txtapel']),ENT_QUOTES);
$ident = htmlentities(addslashes($_POST['txtident']),ENT_QUOTES);
$email = htmlentities(addslashes($_POST['txtemail']),ENT_QUOTES);
$pass1 = htmlentities(addslashes($_POST['txtpass']),ENT_QUOTES);
$dir = htmlentities(addslashes($_POST['txtdir']),ENT_QUOTES);
$ciu = htmlentities(addslashes($_POST['txtciu']),ENT_QUOTES);
$dep = htmlentities(addslashes($_POST['txtdep']),ENT_QUOTES);
$pais = htmlentities(addslashes($_POST['txtpais']),ENT_QUOTES);
$tel = htmlentities(addslashes($_POST['txttel']),ENT_QUOTES);
$cif = '$genesis$/';
$pass = sha1(sha1(md5(($cif.$pass1))));

//var_dump($_POST);
if (veriEmail($email)) {
  ?>
<script type="text/javascript">
  alert('Email incresado ya Exite');
  location.href="../registro.php";
</script>
  <?php
}else {
  Conectar();
  RegistrarUser($nom,$ape,$ident,$email,$pass,$dir,$ciu,$dep,$pais,$tel);
  header('location: ../cuenta.php');
}

// $funciones = new funciones($base);
// $usuario = new Usuario();
//
// $usuario->setNombre(htmlentities(addslashes($_POST['txtnom'])),ENT_QUOTES);
// $usuario->setApelldio(htmlentities(addslashes($_POST['txtapel'])),ENT_QUOTES);
// $usuario->setIdentificacion(htmlentities(addslashes($_POST['txtident'])),ENT_QUOTES);
// $usuario->setEmail(htmlentities(addslashes($_POST['txtemail'])),ENT_QUOTES);
// $usuario->setPassword(htmlentities(addslashes($_POST['txtpass'])),ENT_QUOTES);
// $usuario->setDireccion(htmlentities(addslashes($_POST['txtdir'])),ENT_QUOTES);
// $usuario->setCiudad(htmlentities(addslashes($_POST['txtciu'])),ENT_QUOTES);
// $usuario->setDepartamento(htmlentities(addslashes($_POST['txtdep'])),ENT_QUOTES);
// $usuario->setPais(htmlentities(addslashes($_POST['txtpais'])),ENT_QUOTES);
// $usuario->setTelefono(htmlentities(addslashes($_POST['txttel'])),ENT_QUOTES);
//
// $nuevoregistro = $funciones->NuevoUsuario($usuario);
// if ($nuevoregistro != 0) {
//   header('location: ../cuenta.php');
// }else {
//   header('location: ../cuenta.php?erro=1');
// }


 ?>
