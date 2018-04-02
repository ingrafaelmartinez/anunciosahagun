<?php

class ControladorSlide{

    public function crtMostrarSlide(){

        $tabla = "slide";
        $respuesta = ModeloSlide::mdlMostrarSlide($tabla);
        return $respuesta;

    }
}
