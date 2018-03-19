<?php
include 'scripts/funciones.php';
if (!HaIniciadoSesion()) {
  header('location: index.php');
}

if (empty($_GET['id'])) {
    header('location: config.php');
}else {
  $id = htmlentities(addslashes($_GET['id']),ENT_QUOTES);
}
Conectar();
$datos = InfEmpresa($id);

 ?>
  <?php include 'include/header.php'; ?>
  <h2><a href="config.php">Cancelar</a></h2>
    <form action="scripts/modinf.php" method="post">
      <?php foreach ($datos as $valor): ?>
        <input type="hidden" name="txtid" value="<?=$valor[0]?>">
      <label>Nombre o Rason social</label><br>
      <input type="text" name="txtnom" value="<?=$valor[1]?>"><br>
      <label>Nit o C.C.</label><br>
      <input type="text" name="txtnit" value="<?=$valor[2]?>"><br>
      <label>Email</label><br>
      <input type="Email" name="txtemail" value="<?=$valor[3]?>"><br>
      <label>Contraseña</label><br>
      <input type="password" name="txtpass" value="<?=$valor[4]?>"><br>
      <label>Telefono</label><br>
      <input type="text" name="txttel" value="<?=$valor[5]?>"><br>
      <label>Direccion</label><br>
      <input type="text" name="txtdir" value="<?=$valor[6]?>"><br>
      <label>Ciudad</label><br>
      <input type="text" name="txtciu" value="<?=$valor[7]?>"><br>
      <label>Departamento</label><br>
      <input type="text" name="txtdep" value="<?=$valor[8]?>"><br>
      <label>Pais</label><br>
      <input type="text" name="txtpais" value="<?=$valor[9]?>"><br>
      <input type="submit" name="Registar">
        <?php endforeach; ?>
    </form>


 </body>
 </html>
