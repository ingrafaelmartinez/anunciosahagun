<?php
include 'funciones.php';


   $id = htmlentities(addslashes($_POST['txtid']),ENT_QUOTES);
   $nom = htmlentities(addslashes($_POST['txtnom']),ENT_QUOTES);
   $nit = htmlentities(addslashes($_POST['txtnit']),ENT_QUOTES);
   $email = htmlentities(addslashes($_POST['txtemail']),ENT_QUOTES);
   $pass = sha1(htmlentities(addslashes($_POST['txtpass']),ENT_QUOTES));
   $tel = htmlentities(addslashes($_POST['txttel']),ENT_QUOTES);
   $dir = htmlentities(addslashes($_POST['txtdir']),ENT_QUOTES);
   $ciu = htmlentities(addslashes($_POST['txtciu']),ENT_QUOTES);
   $dep = htmlentities(addslashes($_POST['txtdep']),ENT_QUOTES);
   $pais = htmlentities(addslashes($_POST['txtpais']),ENT_QUOTES);

Conectar();
EditarInf($id,$nom,$nit,$email,$pass,$tel,$dir,$ciu,$dep,$pais);
Desconectar();
header('location: ../config.php');

 ?>
