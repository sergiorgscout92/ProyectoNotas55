<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<title>REGISTRO DE USUARIOS</title>
</head>
<body>
	<div class="container">
	<section class="form-register">
		<h4>REGISTRO DE USUARIOS</h4>
		<form action="../controladores/agregarusuarios.php" method="post">
		<div class="form-group">
		<h1>Nombre:</h1>
		<input class="controls" type="text" name="txtnombre" id="nombre" placeholder="Ingresar su Nombre">
		</div>
		<div class="form-group">
		<h1>Apellido:</h1>
		<input class="controls" type="text" name="txtapellido" id="apellido" placeholder="Ingresar su Apellido">
		</div>
		<div class="form-group">
		<h1>Usuario:</h1>
		<input class="controls" type="text" name="txtusuario" id="usuario" placeholder="Ingresar su Usuario">
		</div>
		<div class="form-group">
		<h1>Contraseña:</h1>
		<input class="controls" type="password" name="txtcontraseña" id="contraseña" placeholder="Ingresar su Contraseña">
		</div>
		<div class="form-group">
		<h1>Perfil:</h1>
		<label for="perfil"></label>
		<select class="form-select" name="txtperfil" arial-label="Default select axample">
			<option value="Elegir una opcion">Elegir una opcion</option>
			<option value="Administrador">Administrador</option>
			<option value="Docente">Docente</option>
		</select>
		</div>
		<div class="form-group">
		<h1>Estado:</h1>
		<select class="form-select" name="txtestado" arial-label="Default select axample">
			<option value="Elegir una opcion">Elegir una opcion</option>
			<option value="Activo">Activo</option>
			<option value="No Activo">No Activo</option>
		</select>
		</div>
		<br>
		<input class="btn btn-danger" type="submit" name="accion" value="Registrar">
</form>
	</section>
</div>
</body>
</html>