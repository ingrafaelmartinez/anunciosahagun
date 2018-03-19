<?php
$conexion = null;
include 'conexion.php';

function veriEmail($email){
  global $conexion;
  $resp = "SELECT * FROM tb_anunciante where email = '".$email."'";
  $resultado =  mysqli_query($conexion,$resp);
  if ($fila = mysqli_fetch_row($resultado)) {
    return true;
  }
  return false;
}
function IniciarSecion($email,$pass){
  global $conexion;
  $result = "SELECT * FROM tb_anunciante where email = '".$email."' AND pass = '".$pass."'";
  $respuesta = mysqli_query($conexion,$result);
  if ($fila = mysqli_fetch_row($respuesta)) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $fila[0];
    return true;
  }
  return false;
}
function HaIniciadoSesion(){
  session_start();
  return isset($_SESSION['email']);
}
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
  $result = mysqli_query($conexion,"SELECT * FROM tb_oferta WHERE id_cat=".$id);
  $respusta_array = array();
  while($fila = $result->fetch_row())
    $respusta_array[] = $fila;
  return $respusta_array;
}
function DetallesOferta($id){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM tb_oferta WHERE id_oferta=".$id);
  $respusta_array = array();
  while($fila = $result->fetch_row())
    $respusta_array[] = $fila;
  return $respusta_array;
}
function GetVendedor($id){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM tb_anunciante WHERE id=".$id);
  $respusta_array = array();
  while($fila = $result->fetch_row())
    $respusta_array[] = $fila;
  return $respusta_array;
}
function Desconectar(){
  global $conexion;
  mysqli_close($conexion);
}
function ValidarUsuario($email,$pass){

}
 ?>
