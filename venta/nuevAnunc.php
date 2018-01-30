<!DOCTYPE html>
<html>
<head>
	<title>Nuevo</title>
</head>
<body>
	<h2>Nuevo anuncio</h2>
	<a href="anuncio.php">Cancelar</a>

	<form action="scripts/NuevAnunio.php" method="post">
		<label>Descripcion Del Anuncio</label><br>
		<input type="text" name="txtNom" ><br>
		<label>Valor</label><br>
		<input type="number" name="txtCan" ><br>
		<label>Fecha de inicio</label><br>
		<input type="date" name="txtFechInic" ><br>
		<label>Fecha de cierre</label><br>
		<input type="date" name="txtFechFinal" ><br>
		<label>Condiciones Especiales</label><br>
		<textarea rows="4" cols="50"></textarea><br>
		 <input type="submit" value="Crear">
	</form>

</body>
</html>