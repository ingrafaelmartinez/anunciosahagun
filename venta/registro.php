<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<header>
		<h2>nombre</h2>
	</header>
	<nav>
		<ul>
			<li><a href="">Login</a></li>
			<li><a href="">Registro</a></li>
		</ul>

	</nav>
		<form action="scripts/valreg.php" method="post">
			<label>Nombre o Rason social</label><br>
			<input type="text" name="txtnom"><br>
			<label>Nit o C.C.</label><br>
			<input type="text" name="txtnit"><br>
			<label>Telefono</label><br>
			<input type="text" name="txttel"><br>
			<label>Email</label><br>
			<input type="Email" name="txtemail"><br>
			<label>Contraseña</label><br>
			<input type="password" name="txtpass"><br>
			<label>Direccion</label><br>
			<input type="text" name="txtdir"><br>
			<label>Ciudad</label><br>
			<input type="text" name="txtciu"><br>
			<label>Departamento</label><br>
			<input type="text" name="txtdep"><br>
			<label>Pais</label><br>
			<input type="text" name="txtpais"><br>	
			<input type="submit" name="Registar">
		</form>

</body>
</html>
