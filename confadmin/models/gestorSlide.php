<?php
require_once 'conexion.php';

class GestorSlideModel{

  #subir ruta de la imagen
  public function subirImagenSlider($datos,$tabla){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (ruta) VALUES (:ruta)");
    $stmt -> bindParam(":ruta", $datos,PDO::PARAM_STR);

    if ($stmt->execute()) {
      echo "ok";
    }else {
       "error";
    }

    $stmt->close();

  }

  public function mostarImagenSliderModel($datos,$tabla){
    # code...
    $stmt = Conexion::conectar()->prepare("SELECT ruta,titulo,descripcion FROM $tabla WHERE ruta = :ruta");

    $stmt -> bindParam(":ruta", $datos, PDO::PARAM_STR);

    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
  }
  #metoso para mostrar la images del slide
  public function mostarImagenVistaModel($tabla){
    # code...
    $stmt = Conexion::conectar()->prepare("SELECT ruta,titulo,descripcion FROM $tabla ORDER BY orden ASC");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
  }

}
