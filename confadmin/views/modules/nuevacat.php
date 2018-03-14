<?php
include 'header.php';
include 'menu.php';
include 'barrasuperior.php';
?>


      <div id="galeria" class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

			<hr>

			<p><span class="fa fa-arrow-down"></span>Registrar nueva Categoria</p>

				<ul id="lightbox">
          <form class="form-inline" action="/action_page.php">
          <br>
          <div class="form-group">
            <label class="" for="email">Nombre Nueva Categoria:</label>
            <input type="email" class="form-control" id="email" name="registarCantegoria">
          </div>
          <button type="submit" class="btn btn-default">Crear</button>

        </form>

        <br>

				</ul>



			</div>



<?php
include 'footer.php';
?>
