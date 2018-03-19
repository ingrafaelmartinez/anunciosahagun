<?php

class gestorCategoria{

  public function agregarCategoria(){
    # code...
    if (isset($_POST["categoria"])) {

      $datosController = $_POST["categoria"];

      $respuesta = gestorCategoriaModel::agregarCategoriaModel($datosController,"tb_categ");

      echo $respuesta;


    }
  }

  public function listaCategoria(){
    # code...
    $respuesta = gestorCategoriaModel::listaCategoriaModel("tb_categ");

    foreach ($respuesta as $row => $item) {
      $i="#";
      echo '<tr>
          <td>'.$i.'</td>
          <td>'.$item["nombre"].'</td>
          <td><a href="EditarCat/'.$item["id_cat"].'">Editar</a></td>
          <td><a href="EliminarCat/'.$item["id_cat"].'"</a>Eliminar</td>
        </tr>';
      # code...
    }
  }
  public function verCategoriaController(){
    $datos = explode("/",$_GET['action']);
    $datosController = $datos[1];

    $respuesta = gestorCategoriaModel::verCategoriaModel($datosController ,"tb_categ");

      echo '<input type="hidden" name="txtid" value="'.$respuesta['id_cat'].'">
            <input type="text" name="txtnomeditar" value="'.$respuesta['nombre'].'">';


  }
  public function actualizarCategoriaController(){

    if (isset($_POST['txtid'])) {
        $datosController  = array("id" => $_POST['txtid'],"nombre"=>$_POST['txtnomeditar']);

        $respuesta = gestorCategoriaModel::actualizarCategoriaModel($datosController ,"tb_categ");

        if ($respuesta == "ok") {
            //header('location: categorias');
            echo "Categoria fue Modificada";
            echo '<a href="http://localhost:8080/anunciosahagun/confadmin/categorias"><h3>Volver</h3></a>';
        }else {
          //header('location: categorias');
          echo "Error al Modificar Categoria";
        }
        //echo $_POST['txtnomeditar'];
    }
  }

  public function EliminarCategoriaController(){
    if (isset($_POST['txtid'])) {
      $datos = $_POST['txtid'];
      $respuesta  = gestorCategoriaModel::EliminarCategoriaModel($datos,"tb_categ");

      if ($respuesta == "ok") {
        echo "Categoria fue Eliminada";
        echo '<a href="http://localhost:8080/anunciosahagun/confadmin/categorias"><h3>Volver</h3></a>';
      }else {
        echo "Error al Eliminar Categoria";
      }

    }
  }

}
