<?php

class EnlacesModels{

    public function enlacesModel($enlace){
        $rutas = array();
        $rutas = explode("/",$enlace);

        if ($rutas[0] == "contenido"||
            $rutas[0] == "perfil"||
            $rutas[0] == "registro"||
            $rutas[0] == "login"||
            $rutas[0] == "ventas"||
            $rutas[0] == "registrov"||
            $rutas[0] == "loginv"||
            $rutas[0] == "principal"||
            $rutas[0] == "productos"||
            $rutas[0] == "regcond"||
            $rutas[0] == "vercategoria"||
            $rutas[0] == "veroferta"||
            $rutas[0] == "activaroferta") {

              $module = 'views/modules/'.$rutas[0].'.php';
        }elseif ($enlace == 'index') {

              $module = 'views/modules/contenido.php';

        }else {

              $module = 'views/modules/contenido.php';
        }
        return $module;
    }


}
