<?php

class Ingreso{

  public function ingresoController(){
    if (isset($_POST["usuarioIngreso"])) {

      if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["usuarioIngreso"]) && preg_match('/^[a-zA-Z0-9]+$/',$_POST["passwordIngreso"])){
        $datosController = array("usuario"=>$_POST["usuarioIngreso"],
                                 "password"=>$_POST["passwordIngreso"]);

        $respuesta = IngresoModels::ingresoModel($datosController,"empre_user");

        $intentos = $respuesta["intentos"];
        $usuarioActual = $_POST["usuarioIngreso"];
        $maximosIntentos = 2;

          if($intentos < $maximosIntentos){
              if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){

                $intentos = 0;
                $datosController = array("usuarioActual"=>$usuarioActual,"ActualizarIntentos"=>$intentos);

                $respuestaActualizarIngreso = IngresoModels::intentosModel($datosController,"empre_user");

                session_start();
                $_SESSION["validar"] = true;
                $_SESSION["usuario"] = $respuesta["usuario"];

                # redirecionamos
                    header("location:principal");
                    //echo "string";
                }else {
                  ++$intentos;
                  $datosController = array("usuarioActual"=>$usuarioActual,"ActualizarIntentos"=>$intentos);

                  $respuestaActualizarIngreso = IngresoModels::intentosModel($datosController,"empre_user");
                  echo "<div>Error al ingresar Datos</div>";
                }
            }else {
              # para validar por capcha
              $intentos = 0;
              $datosController = array("usuarioActual"=>$usuarioActual,"ActualizarIntentos"=>$intentos);

              $respuestaActualizarIngreso = IngresoModels::intentosModel($datosController,"empre_user");
              # redirecionamos
                  echo "<div>Error al ingresar Datos a fallodo 3 veces, Debe validar Datos</div>";
            }
          }
      }
    }
}
