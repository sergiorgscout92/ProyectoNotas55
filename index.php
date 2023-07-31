<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Inicio de sesión</title>
</head>
<body>
	<form action="Usuarios/controladores/usuarioscontrol.php" method="POST">
		<div class="container">
			<div class="col-lg-9">
				<h1>Inicio de sesión</h1>
				<div class="form-group">
					<label>Usuario</label>
					<br>
					<input type="text" class="form-control" name="txtUsuario" placeholder="Ingrese su usuario">
				</div>
				<div class="form-group">
					<br>
					<label>Contraseña</label>
					<br>
					<input type="password" class="form-control" name="txtPass" placeholder="Ingrese su contraseña">
				</div>
				<div class="form-group">
					<br>
					<input class="btn btn-primary" type="submit" value="Iniciar sesión" name="iniciarSesion">
					<a class="btn btn-danger
					" href="Administrador/pages/agregar.php">Resgistrarse</a>
				</div>
			</div>
		</div>
	</form>
	
</body>
</html>