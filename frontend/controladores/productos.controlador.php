<?php

class ControladorProductos{
    #mostrar categorias
    static public function ctrMostrarCategorias($item, $valor){

        $tabla = "categorias";
        $respuesta = ModelosProductos::mdlMostrarCategorias($tabla, $item, $valor);

        return $respuesta;

    }
    #mostrar subcategorias
    static public function ctrMostrarSubCategorias($item, $valor){

      $tabla = "subcategoria";

      $respuesta = ModelosProductos::mdlMostrarSubCategorias($tabla, $item, $valor);

      return $respuesta;

    }
}
