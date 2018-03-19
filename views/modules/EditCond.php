<?php
include 'scripts/funciones.php';
Conectar();
if (!HaIniciadoSesion()) {
  header('location: index.php');
}
if (isset($_GET['id'])) {
  $id = htmlentities(addslashes($_GET['id']),ENT_QUOTES);
}
$resul = VerCondicion($id);
 ?>
  <?php include 'include/header.php'; ?>
   <section>
     <h2><a href="condic.php">Cancelar<a/></h2>

   </section>
     <section>
       <form class="" action="scripts/editcond.php" method="post">
         <?php foreach ($resul as $valor): ?>
           <input type="hidden" name="txtId" value="<?=$valor[0]?>">
           <label for="">Nueva Condiciones de servicio o venta</label><br>
           <input type="text" name="txtcond" value="<?=$valor[2]?>"><br>
           <input type="submit" name="Modificar" value="Modificar">
         <?php endforeach; ?>

       </form>
     </section>

   </body>
   <footer>
     &copy 2018
   </footer>
