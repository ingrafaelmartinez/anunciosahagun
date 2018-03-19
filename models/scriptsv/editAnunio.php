<?php
include 'funciones.php';
if (!HaIniciadoSesion()) {
  header('location: index.php');
}
$img = $_POST['img'];

//echo "imagen ".$img;

if (!empty($_FILES['user-file']['name'])!=0) {
    if (file_exists("../photo/$img")) {
        unlink("../photo/$img");
    }
    if (validar($_FILES)) {
      $path = '../../photo/';
      $file = $path.basename($_FILES['user-file']['name']);
        if (move_uploaded_file($_FILES['user-file']['tmp_name'],$file)) {
          // header('location: index.php');
          // echo "imagen cargada es ".$_FILES['user-file']['name'];
        }
    }else {
      header('location: ../EditarOferta.php?erro=1');
    }
}

Conectar();
$id = htmlentities(addslashes($_POST['id']));
$cat = htmlentities(addslashes($_POST['txtcat']),ENT_QUOTES);
$nom = htmlentities(addslashes($_POST['txtNom']),ENT_QUOTES);
$val = htmlentities(addslashes($_POST['txtval']),ENT_QUOTES);
$cant = htmlentities(addslashes($_POST['txtCan']),ENT_QUOTES);
$inic = htmlentities(addslashes($_POST['txtFechInic']),ENT_QUOTES);
$fin = htmlentities(addslashes($_POST['txtFechFinal']),ENT_QUOTES);
$incl = htmlentities(addslashes($_POST['txtincluye']),ENT_QUOTES);
$imgN = $_FILES['user-file']['name'];
$cond = htmlentities(addslashes($_POST['txtcond']),ENT_QUOTES);
EditarOferta($id,$cat,$nom,$val,$cant,$inic,$fin,$incl,$imgN,$cond);

Desconectar();
header('location: ../anuncio.php');
 ?>
