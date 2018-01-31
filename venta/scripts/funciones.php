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
function NuevoRegistro($nom,$nit,$email,$pass,$tel,$dir,$ciu,$dep,$pais){
  global $conexion;
  mysqli_query($conexion,"INSERT INTO `tb_anunciante` (`id`, `nombre`, `nit`,
                          `email`, `pass`, `telefono`, `direccion`, `ciudad`,
                          `departamento`, `pais`) VALUES (NULL, '$nom', '$nit',
                            '$email', '$pass', '$tel', '$dir', '$ciu', '$dep', '$pais')");
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
  //return isset($_SESSION['id_empresa']);
}
function Desconectar(){
  global $conexion;
  mysqli_close($conexion);
}



 ?>
