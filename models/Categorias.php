<?php

//include 'conexion.php';

class CategoriasModels{

    public function ListaCategoriaModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT id_cat, nombre FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();
    }
}
