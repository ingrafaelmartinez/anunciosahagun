<?php
include 'scripts/funciones.php';
Conectar();
if (isset($_GET['cat'])) {
  $id = $_GET['cat'];
}
$cat = VerCategoria($id);
 ?>

 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/styles.css">
     <title>Cuponera Sahagún</title>
   </head>
   <body>
     <header id="main-header">

     <a id="logo-header" href="index.php">
       <span class="site-name">ANUNCIOS</span>
       <span class="site-desc">Compra facil sin salir de tu casa</span>
     </a> <!-- / #logo-header -->

     <nav>
       <ul>
         <li><a href="#">Inicio</a></li>
         <li><a href="login.html">Login </a></li>
         <li><a href="registro.php">Registrate</a></li>
       </ul>
     </nav><!-- / nav -->

   </header><!-- / #main-header -->


   <section id="main-content">
     </header>
 <div class="contenedor">


     <aside class="categorias">
       <!-- aqui el menú de categorias -->
       <h2>Categorías</h2>
       <ul id="category-list">
         <?php
         //$categoria = new funciones($base);
         $infocat = ListarCategoria();
         foreach ($infocat as $valor): ?>
           <li><a href="vercat.php?cat=<?=$valor[0]?>"><?=$valor[1]?></a></li>
           <hr>
         <?php endforeach; ?>

         <!-- <li><a href="#">Entretenimiento</a></li>
         <li><a href="#">Salud</a></li> -->
       </ul>
     </aside>

     <section>
       <?php foreach ($cat as $valor): ?>
         <div class="">
           <h2><?=$valor[1]?></h2>
         </div>

       <?php endforeach; ?>
       <section>
        <div>
           <img src="photo/img1.jpg">
           <h2>nombre producto</h2>
           <h4>nmbre de la empresa </h4>
           <p>descripcion </p>
           <h3>cantidad Disponible:  <strong>200</strong></h3>
           <time>29/01/2018</time><br>
           <time>29/03/2018</time><br>
           <a href=""><button>Comprar</button></a>
         </div>
          <div>
             <img src="photo/img2.jpg" width="250px" height="250px">
             <h2>nombre producto</h2>
             <p>descripcion </p>
             <h3>cantidad Disponible</h3>
             <time>29/01/2018</time><br>
             <time>29/03/2018</time><br>
             <a href=""><button>Comprar</button></a>
         </div>
       </section>


     </section>

 </div>
     <footer>
       <div>
         <ul>
           <li><a href="">Vende Aqui</a></li>
         </ul>
       </div>
       <!-- El footer para los pies de páginas y conctactos -->
       <ul class="footer-social">
         <li class="footer-item">
           <a href="#" target="_blank">Facebook</a>
         </li>

         <li class="footer-item">
           <a href="#">Twitter</a>
         </li>
       </ul>


       <div class="copy">
         &copy 2018 Anuncio Sahagún
       </div>
     </footer>


   </body>
 </html>
