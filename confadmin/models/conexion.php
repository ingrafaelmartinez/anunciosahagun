<?php

class Conexion{

  public function conectar(){
    # code...
    $link = new PDO('mysql:host=localhost;dbname=anunsah','root','');
    return $link;
  }
}
