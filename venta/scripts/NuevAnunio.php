<?php
include 'funciones.php';
if (!HaIniciadoSesion()){
   header('location: ../index.php');
}

if (validar($_FILES)) {
  //tmp-name lo use como nombre tempoaral
  $path = '../../photo/';
  $file = $path.basename($_FILES['user-file']['name']);
  if (move_uploaded_file($_FILES['user-file']['tmp_name'],$file)) {
    //header('location: index.php');
    //echo "imagen cargada es ".$_FILES['user-file']['name'];
  }
}else {
 header('location: ../nuevAnunc.php?error=1');
}

$idemp = $_SESSION['id'];
$cat = htmlentities(addslashes($_POST['txtcat']),ENT_QUOTES);
$nom = htmlentities(addslashes($_POST['txtNom']),ENT_QUOTES);
$val = htmlentities(addslashes($_POST['txtval']),ENT_QUOTES);
$cant = htmlentities(addslashes($_POST['txtCan']),ENT_QUOTES);
$inic = htmlentities(addslashes($_POST['txtFechInic']),ENT_QUOTES);
$fin = htmlentities(addslashes($_POST['txtFechFinal']),ENT_QUOTES);
$incl = htmlentities(addslashes($_POST['txtincluye']),ENT_QUOTES);
$img = $_FILES['user-file']['name'];
$cond = htmlentities(addslashes($_POST['txtcond']),ENT_QUOTES);

Conectar();
InserAnuncio($idemp,$cat,$nom,$val,$cant,$inic,$fin,$incl,$img,$cond)
 header('location: ../anuncio.php');


 ?>
