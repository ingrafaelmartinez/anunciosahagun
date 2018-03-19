<?php

require_once 'conexion.php';

class gestorCategoriaModel{

  public function agregarCategoriaModel($datosModel ,$tabla){
    # code.
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre) VALUES (:nombre)");

    $stmt->bindParam(":nombre",$datosModel, PDO::PARAM_STR);

    if ($stmt->execute()) {
       return "Categoria resgistrada Corectamenente";
    }else {
      return "error";
    }
  }
  public function listaCategoriaModel($tabla){
    $stmt = Conexion::conectar()->prepare("SELECT id_cat,nombre FROM $tabla");
    $stmt->execute();
    return $stmt->fetchAll();

  }
  public function verCategoriaModel($datosModel,$tabla){
    $stmt = Conexion::conectar()->prepare("SELECT id_cat, nombre FROM $tabla WHERE id_cat=:id");
    $stmt->bindParam(":id",$datosModel, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
  }
  public function actualizarCategoriaModel($datosModel, $tabla){
    $stmt = Conexion::conectar()->prepare("UPDATE tb_categ SET nombre = :nombre WHERE id_cat = :id");
    $stmt->bindParam(":id", $datosModel['id'], PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $datosModel['nombre'], PDO::PARAM_STR);

    if ($stmt->execute()) {
       return "ok";
    }else {
      return "error";
    }
  }
  public function EliminarCategoriaModel($datosModel,$tabla){
    $stmt = Conexion::conectar()->prepare("DELETE FROM tb_categ WHERE id_cat = :id");
    $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

    if($stmt->execute()){
      return "ok";
    }else {
      return "error";
    }
  }
}
