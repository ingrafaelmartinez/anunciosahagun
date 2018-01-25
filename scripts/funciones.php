<?php
$conexion = null;
include 'conexion.php';

function ListarCategoria(){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM tb_categ");
  $respusta_array = array();
  while($fila = $result->fetch_row())
    $respusta_array[] = $fila;
  return $respusta_array;
}
function RegistrarUser($nom,$ape,$ident,$email,$pass,$dir,$ciu,$dep,$pais,$tel){
	global $conexion;
	mysqli_query($conexion,"INSERT INTO `tb_user` (`id_user`, `nombre`, `apellidos`, `identificacion`, `email`, `pass`, `direccion`, `ciudad`, `departamento`, `pais`, `telefono`) VALUES (NULL, '".$nom."', '".$ape."', '".$ident."', '".$email."', '".$pass."', '".$dir."', '".$ciu."', '".$dep."', '".$pais."', '".$tel."')");
}

function VerCategoria($id){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM tb_categ WHERE id_cat=".$id);
  $respusta_array = array();
  while($fila = $result->fetch_row())
    $respusta_array[] = $fila;
  return $respusta_array; 
}
 ?>
