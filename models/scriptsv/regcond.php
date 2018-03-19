<?php
include 'funciones.php';
Conectar();

if (!HaIniciadoSesion()) {
   header('location: index.php');
 }

   Conectar();
   if (empty($_POST['txtcond'])) {

     ?>
     <script type="text/javascript">
       alert('El campo esta Vacio');
       location.href="../regcond.php";
     </script>
     <?php

   }else {
     $id = $_SESSION['id'];
     $desc = htmlentities(addslashes($_POST['txtcond']));
     NuevaCondicion($id,$desc);
     header('location: ../regcond.php');
   }


 ?>
