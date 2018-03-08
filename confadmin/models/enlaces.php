<?php

class EnlacesModels{

  public function enlacesModel($enlace){

    if ($enlace == 'principal' ||
        $enlace == 'categorias' ||
        $enlace == 'usuarios' ||
        $enlace == 'ingreso' ||
        $enlace == 'config' ||
        $enlace == 'clientes' ||
        $enlace == 'mensajes' ||
        $enlace == 'suscriptores' ||
        $enlace == 'galeria' ||
        $enlace == 'articulos' ||
        $enlace == 'videos' ||
        $enlace == 'baner' ||
        $enlace == 'salir' ) {

        $module = 'views/modules/'.$enlace.'.php';

    }elseif ($enlace == 'index') {

        $module =  'views/modules/ingreso.php';

    }else {

       $module =  'views/modules/ingreso.php';

    }
    return $module;
  }

}
