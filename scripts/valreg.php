<?php
include 'conexion.php';
include 'usuario.class.php';
include 'funciones.class.php';
/*include 'funciones.php';

$nom =  $_POST['txtnom'];
$ape = $_POST['txtapel'];
$ident = $_POST['txtident'];
$email = $_POST['txtemail'];
$pass = $_POST['txtpass'];
$dir = $_POST['txtdir'];
$ciu = $_POST['txtciu'];
$dep = $_POST['txtdep'];
$pais = $_POST['txtpais'];
$tel = $_POST['txttel'];*/

//var_dump($_POST);
//Conectar();
//RegistrarUser($nom,$ape,$ident,$email,$pass,$dir,$ciu,$dep,$pais,$tel);

$funciones = new funciones($base);
$usuario = new Usuario();

$usuario->setNombre(htmlentities(addslashes($_POST['txtnom'])),ENT_QUOTES);
$usuario->setApelldio(htmlentities(addslashes($_POST['txtapel'])),ENT_QUOTES);
$usuario->setIdentificacion(htmlentities(addslashes($_POST['txtident'])),ENT_QUOTES);
$usuario->setEmail(htmlentities(addslashes($_POST['txtemail'])),ENT_QUOTES);
$usuario->setPassword(htmlentities(addslashes($_POST['txtpass'])),ENT_QUOTES);
$usuario->setDireccion(htmlentities(addslashes($_POST['txtdir'])),ENT_QUOTES);
$usuario->setCiudad(htmlentities(addslashes($_POST['txtciu'])),ENT_QUOTES);
$usuario->setDepartamento(htmlentities(addslashes($_POST['txtdep'])),ENT_QUOTES);
$usuario->setPais(htmlentities(addslashes($_POST['txtpais'])),ENT_QUOTES);
$usuario->setTelefono(htmlentities(addslashes($_POST['txttel'])),ENT_QUOTES);

$nuevoregistro = $funciones->NuevoUsuario($usuario);
if ($nuevoregistro != 0) {
  header('location: ../cuenta.php');
}else {
  header('location: ../cuenta.php?erro=1');
}


 ?>
