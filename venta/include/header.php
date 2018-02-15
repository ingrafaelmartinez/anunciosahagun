<!DOCTYPE html>
<html>
<head>
 <title>Cuenta</title>
</head>
<body>
<header>
 <h1><a href="principal.php">Anuncio</a></h1>
 <ul>
   <li><?php echo $_SESSION['email']; ?></li>
   <li><a href="config.php">Configuraciones</a></li>
   <li><a href="scripts/salir.php">Salir<a/></li>
 </ul>
</header>
<nav>
 <ul>
   <li><a href="principal.php">Principal</a></li>
   <li><a href="venta.php">Ventas</a></li>
   <li><a href="valVenta.php">Validar Venta</a></li>
   <li><a href="anuncio.php">Anuncios<a/></li>
   <li><a href="nuevAnunc.php">Nuevo Anuncio</a></li>
   <li><a href="condic.php">Condiciones de ventas</a></li>
 </ul>
 <br>
</nav>
