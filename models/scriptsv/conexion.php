<?php
function Conectar(){
  global $conexion;
  $conexion = mysqli_connect('localhost','root','','anunsah');
  mysqli_set_charset($conexion,'utf8');
}

// try {
//   $base = new PDO('mysql:host=localhost;dbname=anunsah','root','');
//   $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//
// } catch (\Exception $e) {
//   die('ERROR: '.$e->getMessage());
// }




 ?>
