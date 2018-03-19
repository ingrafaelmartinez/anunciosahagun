<?php

class EnlacesModels{

  public function enlacesModel($enlace){
      $rutas = array();
      $rutas = explode("/",$enlace);

    if ($rutas[0] == 'principal' ||
        $rutas[0] == 'categorias' ||
        $rutas[0] == 'nuevacat' ||
        $rutas[0] == 'EditarCat' ||
        $rutas[0] == 'EliminarCat' ||
        $rutas[0] == 'usuarios' ||
        $rutas[0] == 'ingreso' ||
        $rutas[0] == 'config' ||
        $rutas[0] == 'clientes' ||
        $rutas[0] == 'mensajes' ||
        $rutas[0] == 'suscriptores' ||
        $rutas[0] == 'galeria' ||
        $rutas[0] == 'articulos' ||
        $rutas[0] == 'videos' ||
        $rutas[0] == 'baner' ||
        $rutas[0] == 'salir' ) {

        $module = 'views/modules/'.$rutas[0].'.php';

    }elseif ($enlace == 'index') {

        $module =  'views/modules/ingreso.php';

    }else {

       $module =  'views/modules/ingreso.php';

    }
    return $module;
  }

}
