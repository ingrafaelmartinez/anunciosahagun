<?php
include 'funciones.php';

if (isset($_POST['txtnom'])) {
    $nombre = $_POST['txtnom'];
}

Conectar();

GuardarCat($nombre);
header('location: ../categorias.php');



 ?>
