<?php
include 'funciones.php';
if (!HaIniciadoSesion()) {
  header('location: index.php');
}
$img = $_POST['img'];

echo "imagen ".$img;
if (!empty($_FILES['user-file']['name'])!=0) {
    if (file_exists("../photo/$img")) {
        unlink("../photo/$img");
    }
}


 ?>
