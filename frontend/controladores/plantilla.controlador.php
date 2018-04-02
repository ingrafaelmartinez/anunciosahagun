<?php

class ControladorPlantilla{

    public function plantilla(){
      # code...
      include 'vistas/plantilla.php';
    }
    #traer los estilos dinamicos
    public function ctrEstiloPlantilla(){
      # code...
      $tabla = "plantilla";

      $respuesta  = ModeloPlantilla::mdlEstiloPlantilla($tabla);

      return $respuesta;
    }
}
