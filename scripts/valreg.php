<?php 

include 'funciones.php';

$nom =  $_POST['txtnom'];
$ape = $_POST['txtapel'];
$ident = $_POST['txtident'];
$email = $_POST['txtemail'];
$pass = $_POST['txtpass'];
$dir = $_POST['txtdir'];
$ciu = $_POST['txtciu'];
$dep = $_POST['txtdep'];
$pais = $_POST['txtpais'];
$tel = $_POST['txttel'];

var_dump($_POST);
Conectar();
RegistrarUser($nom,$ape,$ident,$email,$pass,$dir,$ciu,$dep,$pais,$tel);

header('location: ../cuenta.php');
 ?>
