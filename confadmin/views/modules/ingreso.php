<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>
  </head>
  <body>
    <div class="contenedor">
      <div class="form-ingreso">
  
          <form method="post" id="formIngreso" onsubmit="return validarIngreso()">

          		<h1 id="tituloFormIngreso">INGRESO AL PANEL DE CONTROL</h1>

          		<input class="formIngreso" type="text" placeholder="Ingrese su Usuario" name="usuarioIngreso" id="usuarioIngreso">
          		<input class="formIngreso" type="password" placeholder="Ingrese su Contraseña" name="passwordIngreso" id="passwordIngreso">

          		<?php

          			$ingreso = new Ingreso();
          			$ingreso -> ingresoController();

          		?>

          		<input class="" type="submit" value="Enviar">

          	</form>
        </form>
      </div>

    </div>
  </body>
</html>
