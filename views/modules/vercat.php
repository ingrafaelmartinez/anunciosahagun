
 <!DOCTYPE html>
 <html lang="es">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/styles.css">
     <title>Cuponera Sahagún</title>
   </head>
   <body>
    <?php include("header/header.php") ?><!-- / #main-header -->


   <section id="main-content">
     </header>
 <div class="contenedor">


    <?php include("categoria.php"); ?>

     <section>

         <div>
            <a href="verOferta.php?prod="><img src="photo/"><a/>
            <h2></h2>

              <h4>Vendedor: </h4>

            <h3>cantidad Disponible:  <strong></strong></h3>
            <time>Valido desde:  </time><br>
            <time>Hasta : </time><br>
            <h3>Valor: COP.$ <?php //number_format($valor[4], 0, ",", "." )?></h3>
            <a href="comprar.php?prod="><button>Comprar</button></a>
          </div>


       <?php endforeach; ?>
       <section>

       </section>

     </section>

 </div>
 <?php include 'footer.php';?>
