<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <header>
      <h2>titulo</h2>
    </header>
    <nav>
      <ul>
  			<li><a href="registro.php">nuevo Registro</a></li>
  			<li><a href="login.php">Login</a></li>
  			<li>politicas Y servicios</li>
  			<li>acerda de</li>
  			<li>preguntas frecuentes</li>
  		</ul>
    </nav>
      <section>
        <div class="login">
          <?php if (isset($_GET['error'])) {
            echo "<h2>Datos incorectos</h2>";
          } ?>
          <form class="" action="scripts/valLogin.php" method="post">
            <label for="">Email</label><br>
            <input type="email" name="txtEmail" value=""><br>
            <label for="">Contraseña</label><br>
            <input type="password" name="txtPass" value=""><br><br>
            <input type="submit" name="Entrar" value="Entrar">
          </form>
        </div>
      </section>

  </body>
</html>
