<?php

class GestorSlide{

      # Mostrar imagen con Ajax
   public function mostraImagenController($datos){
     #getimagesize OBTIENE EL TAMAÑO DE LA IMAGEN
     #List() SE utiliza para asignar un numero de variebles en una solo operancion
     List($ancho,$alto) = getimagesize($datos["imagenTemporal"]);
     if ($ancho < 1600 || $alto < 600) {
       echo 0;

     }else {
       $aleatorio = mt_rand(100,999);
       $ruta = "../../views/images/slide/slide".$aleatorio.".jpg";

       #imagecreatefromjpeg() crea una imagen a pertir de una fichero o una url
       $origen = imagecreatefromjpeg($datos["imagenTemporal"]);
       #imagejpeg() exporta al imagen al servior o a un fichero
       imagejpeg($origen,$ruta);

       GestorSlideModel::subirImagenSlider($ruta,"tb_slide");

       $respuesta = GestorSlideModel::mostarImagenSliderModel($ruta,"tb_slide");

       $enviarDatos = array("ruta"=>$respuesta["ruta"]);

       echo json_encode($enviarDatos);

     }

   }
   public function mostarImagenVistaController(){
     # code...
     $respuesta = GestorSlideModel::mostarImagenVistaModel("tb_slide");
     foreach ($respuesta as $row => $item) {
       # mostar
       echo '<li class="bloqueSlide"><span class="fa fa-times"></span><img src="'.substr($item["ruta"],6).'" class="handleImg"></li>';
     }
   }
   public function editorSlideController(){
     # code...
     $respuesta = GestorSlideModel::mostarImagenVistaModel("tb_slide");
     foreach ($respuesta as $row => $item) {
       # mostar
       echo '<li>
         <span class="fa fa-pencil" style="background:blue"></span>
         <img src="'.substr($item["ruta"],6).'" style="float:left; margin-bottom:10px" width="80%">
         <h1>'.$item["titulo"].'</h1>
         <p>'.$item["descripcion"].'.</p>
       </li>';
     }
   }
}
