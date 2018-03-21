<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
</head>
<body>
	<header>
		<h2>nombre</h2>
	</header>
	<nav>
		<ul>
			<li><a href="loginv">Login</a></li>
			<li><a href="registrov">Registro</a></li>
		</ul>

	</nav>
		<form action="scripts/valreg.php" method="post">
			<label>Nombre o Rason social</label><br>
			<input type="text" name="txtnomRegistro"><br>
			<label>Nit o C.C.</label><br>
			<input type="text" name="txtnitRegistro"><br>
			<label>Telefono</label><br>
			<input type="text" name="txttelRegistro"><br>
			<label>Email</label><br>
			<input type="Email" name="txtemailRegistro"><br>
			<label>Contraseña</label><br>
			<input type="password" name="txtpassRegistro"><br>
			<label>Direccion</label><br>
			<input type="text" name="txtdirRegistro"><br>
			<label>Ciudad</label><br>
			<input type="text" name="txtciuRegistro"><br>
			<label>Departamento</label><br>
			<select class="" name="txtdepRegistro">
				<option value="0">Selecciones Un Departamento</option>
				<?php
					$dep = new Departamento();
					$dep -> ListaDepartamento();
				 ?>
			</select>
			<br>
			<label>Pais</label><br>
			<input type="text" name="txtpaisRegistro"><br>
			<input type="submit" name="Registar">
		</form>

</body>
</html>
