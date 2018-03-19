<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
}

 ?>

 <?php include 'include/header.php'; ?>
    <br>
	<h2>Nuevo anuncio</h2>
	<a href="anuncio.php">Cancelar</a>
  <?php if (isset($_GET['error'])) {
    echo "<div><h2>Imagen muy pesada o error en formato</h2></div>";
  } ?>

	<form action="scripts/NuevAnunio.php" method="post" enctype="multipart/form-data">
		<label>Descripcion Del Anuncio</label><br>
		<input type="text" name="txtNom" ><br>
		<label>Valor</label><br>
		<input type="number" name="txtval" ><br>
    <label for="">Categoria</label><br>
    <select class="" name="txtcat">
      <option value="">seleciones la categoria</option>
    </select><br>
    <label>Cantidad</label><br>
		<input type="number" name="txtCan" ><br>
		<label>Fecha de inicio</label><br>
		<input type="date" name="txtFechInic" ><br>
		<label>Fecha de cierre</label><br>
		<input type="date" name="txtFechFinal"><br>
    <p>Selecione la imagen Principal del producto. -"inferior a 4 MB"</p>
    <input type="file" name="user-file" accept="image/*">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152"><br>
		<label>Que incluye</label><br>
		<textarea rows="4" cols="50" name="txtincluye"></textarea><br>
		<label>Condiciones Especiales</label><br>
		<textarea rows="4" cols="50" name="txtcond"></textarea><br>
		 <input type="submit" value="Crear">
	</form>

</body>
</html>
