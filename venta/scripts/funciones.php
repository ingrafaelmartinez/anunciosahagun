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
function NuevaCondicion($id,$desc){
  global $conexion;
  mysqli_query($conexion,"INSERT INTO `tb_cond_serv` (`id`, `id_empresa`, `contenido`) VALUES (NULL, '$id', '$desc')");
}
function CondicionEmp($id){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM `tb_cond_serv` WHERE id_empresa=".$id);
  $respuesta_array = array();
  while($fila = $result->fetch_row())
    $respuesta_array[] = $fila;
  return $respuesta_array;
}
function VerCondicion($id){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM `tb_cond_serv` WHERE id=".$id);
  $respuesta_array = array();
  while ($fila=$result->fetch_row())
    $respuesta_array[] = $fila;
  return $respuesta_array;
}
function EditarCondicion($id,$desc){
  global $conexion;
  mysqli_query($conexion,"UPDATE `tb_cond_serv` SET `contenido` = '$desc' WHERE `tb_cond_serv`.`id` =".$id);
}
function InfEmpresa($id){
  global $conexion;
  $result = mysqli_query($conexion, "SELECT * FROM `tb_anunciante` WHERE id=".$id);
  $respuesta_array = array();
  while($fila=$result->fetch_row())
    $respuesta_array[] = $fila;
  return $respuesta_array;
}
function EliminarCondicion($id){
  global $conexion;
  mysqli_query($conexion,"DELETE FROM `tb_cond_serv` WHERE `tb_cond_serv`.`id` =".$id);
}
function HaIniciadoSesion(){
  session_start();
  return isset($_SESSION['email']);
  //return isset($_SESSION['id_empresa']);
}
function EditarInf($id,$nom,$nit,$email,$pass,$tel,$dir,$ciu,$dep,$pais){
  global $conexion;
  mysqli_query($conexion,"UPDATE `tb_anunciante` SET `nombre` = '$nom', `nit` = '$nit', `email` = '$email',
                          `pass` = '$pass', `telefono` = '$tel', `direccion` = '$dir', `ciudad` = '$ciu',
                           `departamento` = '$dep', `pais` = '$pais' WHERE `tb_anunciante`.`id` =".$id);
}
function validar($file){
  if (($file['user-file']['type']!=='image/jpeg')&&($file['user-file']['type']!=='image/png')){
    return false;
  }
  if ($file['user-file']['size'] > 600000) {
    return false;
  }
  return true;
}

function InserAnuncio($idemp,$cat,$nom,$val,$cant,$inic,$fin,$incl,$img,$cond){
global $conexion;
mysqli_query($conexion,"INSERT INTO `tb_oferta` (`id_oferta`, `id_emp`, `id_cat`,
                        `descripcion`, `valor`, `fecha_incio`, `fecha_cierre`,
                        `cantidad`, `img`, `inclu`, `condiciones`) VALUES (NULL,
                          '$idemp', '$cat', '$nom', '$val', '$inic', '$fin', '$cant',
                           '$img', '$incl ', '$cond')");
}
function AnuncioEmpresa($id){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM `tb_oferta` WHERE `id_emp` =".$id);
  $respuesta_array = array();
  while($fila = $result->fetch_row())
    $respuesta_array[] = $fila;
  return $respuesta_array;
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
function OfertaId($id){
  global $conexion;
  $result = mysqli_query($conexion,"SELECT * FROM `tb_oferta` WHERE `id_oferta` =".$id);
  $respusta_array = array();
  while($fila = $result->fetch_row())
    $respusta_array[] = $fila;
  return $respusta_array;
}
function Desconectar(){
  global $conexion;
  mysqli_close($conexion);
}



 ?>
