<?php

class Categorias{

      public function ListaCategoria(){

          $respuesta = CategoriasModels::ListaCategoriaModel("tb_categ");

          foreach ($respuesta as $row => $item) {
            echo '<li><a href="vercat/'.$item['id_cat'].'">'.$item["nombre"].'</a></li><hr>';
          }

      }
}
