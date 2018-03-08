<?php

require_once 'conexion.php';

class IngresoModels{

  public function ingresoModel($datosModel,$tabla){
    # valindad informacion de ingreso
    $stmt = Conexion::conectar()->prepare("SELECT usuario, password,intentos FROM
                                          $tabla WHERE usuario = :usuario");
                                          
    $stmt -> bindParam(":usuario", $datosModel["usuario"],PDO::PARAM_STR);


    $stmt -> execute();

    return $stmt -> fetch();

    $stmt -> close();


  }
  public function intentosModel($datosModel,$tabla){
    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos = :intentos WHERE usuario = :usuario");

    $stmt -> bindParam(":intentos", $datosModel["ActualizarIntentos"],PDO::PARAM_INT);
    $stmt -> bindParam(":usuario", $datosModel["usuarioActual"],PDO::PARAM_STR);

    if ($stmt -> execute()) {
      # code...
      return "ok";
    }else {
      # code...
      return "error";
    }

  }
}
