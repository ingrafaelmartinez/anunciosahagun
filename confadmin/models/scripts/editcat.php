<?php
include 'funciones.php';

if (isset($_POST['txtid']) && isset($_POST['txtnom'])) {
  $id = $_POST['txtid'];
  $nom = $_POST['txtnom'];
}

EditarCategoria($id,$nom);

header('location: ../categorias.php')

 ?>
