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
    #mostrar PRODUCTOS
    static public function ctrMostrarProductos($ordenar, $item, $valor,$base, $tope,$modo){

      $tabla = "productos";

      $respuesta = ModelosProductos::mdlMostrarProductos($tabla, $ordenar, $item, $valor,$base, $tope,$modo);

      return $respuesta;

    }
    #mostar crtMostrarInforProducto
    static public function crtMostrarInforProducto($item, $valor){

      $tabla = "productos";

      $respuesta = ModelosProductos::mdlMostrarInfoProducto($tabla, $item, $valor);

      return $respuesta;

    }
    #lisar Productos
    static public function ctrListarproductos($ordenar, $item, $valor){

      $tabla = "productos";

      $respuesta = ModelosProductos::mdlListarProductos($tabla,$ordenar, $item, $valor);

      return $respuesta;
    }
    #mostrarbanner
    static public function ctrMostrarBanner($ruta){

        $tabla = "baner";

        $respuesta = ModelosProductos::mdlMostrarBanner($tabla, $ruta);

        return $respuesta;

    }

#buscador
    static public function ctrBuscarProductos($busqueda,$ordenar, $modo, $base, $tope){

    $tabla = "productos";

    $respuesta = ModelosProductos::mdlBuscarProductos($tabla, $busqueda,$ordenar, $modo, $base, $tope);

    return $respuesta;

  }
  #lisar Productos buscador
    static public function ctrListarProductosBusqueda($busqueda){

    $tabla = "productos";

    $respuesta = ModelosProductos::mdlListarProductosBusqueda($tabla,$busqueda);

    return $respuesta;
  }

}
