
if ($("#columnasSlide").html() == 0) {

    $("#columnasSlide").css({"height":"100px"});

}else {
    $("#columnasSlide").css({"height":"auto"});
}

/* subri imagen*/

$("#columnasSlide").on("dragover",function(e) {

  e.preventDefault();
  e.stopPropagation();

  $("#columnasSlide").css({"background":"url(views/images/pattern.png)"});
})

/*soltar la imagen*/
$("#columnasSlide").on("drop",function(e) {

  e.preventDefault();
  e.stopPropagation();

  $("#columnasSlide").css({"background":"white"});
  var archivo = e.originalEvent.dataTransfer.files;
  var imagen = archivo[0];
  var imagenSize = imagen.size;

  if (Number(imagenSize) > 2000000) {
    $("#columnasSlide").before('<div class="alert alert-warning text-center">El rchivo a subir exede el tamaño requerido de; 2MB</div>');
  }else {
    $(".alerta").remove();
  }

  var imagenType = imagen.type;

  if (imagenType == "image/jpeg" || imagenType == "image/png") {
    $(".alerta").remove();
  }else {
    $("#columnasSlide").before('<div class="alert alert-warning text-center">El archivo a subir debe ser jpeg y png 2MB</div>');

  }
  if (Number(imagenSize) < 2000000 && imagenType == "image/jpeg" || imagenType == "image/png") {
    var datos = new FormData();

    datos.append("imagen",imagen);
    $.ajax({
      url:"views/ajax/gestorSlide.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      beforeSend:function(){
        $("#columnasSlide").before('<img src="views/images/giphy.gif" id="status">');
      },
      success: function(respuesta){
          $("#status").remove();
        if (respuesta == 0) {
          $("#columnasSlide").before('<div class="alert alert-warning text-center">la imagen es inferior al tamaño requerido 1600 883</div>');
        }else {

          $("#columnasSlide").css({"height":"auto"});
          $("#columnasSlide").append('<li class="bloqueSlide"><span class="fa fa-times"></span><img src="'+respuesta["ruta"].elice(6)+'" class="handleImg"></li>');
          $("#ordenarTextSlide").append('<li><span class="fa fa-pencil" style="background:blue"></span><img src="'+respuesta["ruta"].elice(6)+'" style="float:left; margin-bottom:10px" width="80%"><h1>'+respuesta["titulo"]+'<p>'+respuesta["descripción"]+'.</p></li>');
        }
      }

    });
  }

})
