<?php
function Conectar(){
  global $conexion;
  $conexion = mysqli_connect('localhost','root','','anunsah');
  mysqli_set_charset($conexion,'utf8');
}



 ?>
