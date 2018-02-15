<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

    <?php include("includes/header.php") ?>

    <form class="" action="scripts/valUser.php" method="post">
      <label for="">Email usuario</label><br>
      <input type="email" name="txtemail" value=""><br>
      <label for="">Contraseña</label><br>
      <input type="password" name="txtpass" id=""><br>
      <input type="submit" name="Ingresar" value="Ingresar">
    </form>

    <?php include("includes/footer.php") ?>
