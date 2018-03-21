<?php

class Departamento{

    function ListaDepartamento(){

      $respuesta = DepartamentoModels::ListaDepartamento("tb_departamentos");
      foreach ($respuesta as $row => $item) {
        echo '<option value="'.$item["nombre"].'">'.$item["nombre"].'</option>';
      }
    }
}
