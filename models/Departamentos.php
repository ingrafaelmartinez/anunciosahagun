<?php

include 'conexion.php';

class DepartamentoModels{

      public function ListaDepartamento($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT nombre FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();

      }
}
