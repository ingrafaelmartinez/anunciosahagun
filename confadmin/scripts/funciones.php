<?php
$conexion = null;
include 'conexion.php';

function GuardarCat($nombre){
  global $conexion;
  mysqli_query($conexion,"INSERT INTO `tb_categ` (`nombre`) VALUES ('$nombre')");
}
function ListarCategoria(){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM tb_categ");
  $respusta_array = array();
  while($fila = $result->fetch_row())
    $respusta_array[] = $fila;
  return $respusta_array;
}
function ListarCategoriId($id){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM `tb_categ` WHERE id_cat =".$id);
  $respusta_array = array();
  while($fila = $result->fetch_row())
    $respusta_array[] = $fila;
  return $respusta_array;
}
function EditarCategoria($id,$nom){
  global $conexion;
  mysqli_query($conexion,"UPDATE tb_categ SET nombre = '".$nom."' WHERE id_cat =".$id);
}


 ?>
