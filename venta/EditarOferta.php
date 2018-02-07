<?php
include 'scripts/funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
}

if (isset($_GET['id'])) {
  $id = htmlentities(addslashes($_GET['id']),ENT_QUOTES);
}
 $oferta = OfertaId($id);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Nuevo</title>
</head>
<body>
	<header>
    <h1>anuncios</h1>
    <ul>
      <li><?php echo $_SESSION['email']; ?></li>
      <li><a href="config.php">Configuraciones</a></li>
      <li><a href="scripts/salir.php">Salir<a/></li>
    </ul>
 	</header>
 	<nav>
 		<ul>
 			<li><a href="public.php">Anuncios Publicados</a></li>
      <li><a href="venta.php">Ventas</a></li>
      <li><a href="valVenta.php">Validar Venta</a></li>
      <li><a href="anuncio.php">Anuncios<a/></li>
      <li><a href="nuevAnunc.php">Nuevo Anuncio</a></li>
      <li><a href="condic.php">Condiciones de ventas</a></li>
 		</ul>

    <br>
	<h2>Nuevo anuncio</h2>
	<a href="anuncio.php">Cancelar</a>
  <?php if (isset($_GET['error'])) {
    echo "<div><h2>Imagen muy pesada o error en formato</h2></div>";
  } ?>

	<form action="scripts/editAnunio.php" method="post" enctype="multipart/form-data">
    <?php foreach ($oferta as $valor): ?>
    <?php  $cate = ListarCategoria(); ?>
		<label>Descripcion Del Anuncio</label><br>
		<input type="text" name="txtNom"  value="<?=$valor[3]?>"><br>
		<label>Valor</label><br>
		<input type="number" name="txtval" value="<?=$valor[4]?>"><br>
    <label for="">Categoria</label><br>
    <select class="" name="txtcat">
        <option value="">seleciones la categoria</option>
      <?php foreach ($cate as $key): ?>
        <option value="<?=$key[0]?>"><?=$key[1]?></option>
      <?php endforeach; ?>

    </select><br>
    <label>Cantidad</label><br>
		<input type="number" name="txtCan" value="<?=$valor[4]?>"><br>
		<label>Fecha de inicio</label><br>
		<input type="date" name="txtFechInic" value="<?=$valor[5]?>"><br>
		<label>Fecha de cierre</label><br>
		<input type="date" name="txtFechFinal" value="<?=$valor[6]?>"><br>
    <img src="../photo/<?=$valor[8]?>" alt="" height="250" width="250">
    <input type="hidden" name="img" value="<?=$valor[8]?>">
    <p>Selecione la imagen Principal del producto. -"inferior a 4 MB"</p>
    <input type="file" name="user-file" accept="image/*">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152"><br>
		<label>Que incluye</label><br>
		<textarea rows="4" cols="50" name="txtincluye"><?=$valor[9]?></textarea><br>
		<label>Condiciones Especiales</label><br>
		<textarea rows="4" cols="50" name="txtcond"><?=$valor[10]?></textarea><br>
		 <input type="submit" value="Crear">
    <?php endforeach; ?>
	</form>

</body>
</html>
