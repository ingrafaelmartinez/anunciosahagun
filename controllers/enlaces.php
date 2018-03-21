<?php

class Enlaces{

  public function EnlacesControllers(){
    # code...
    if (isset($_GET['action'])) {

        $enlace = $_GET['action'];

    }else {
        $enlace = 'index';
    }
    $respuesta = EnlacesModels::enlacesModel($enlace);
    include $respuesta;
  }

}
