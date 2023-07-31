<?php
//require_once('../../Usuarios/controladores/validar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<title>Registro de materias</title>
</head>
<body>
	<nav nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <a class="btn btn-primary" href="../../Administrador/pages/agregar.php">Usuarios</a>
      <a class="btn btn-primary" href="../../Docentes/pages/agregar.php">Docentes</a>
      <a class="btn btn-primary" href="../../Estudiantes/pages/agregar.php">Estudiantes</a>
      <a class="btn btn-primary" href="../../Materias/pages/agregar.php">Materias</a>
      <a class="btn btn-danger" href="../../Usuarios/controladores/salir.php">Cerrar Sesión</a>
    </ul>
  </nav>
  <h2>BIENVENIDO: <?php echo $_SESSION['usuario'];?></h2>
	<div class="container">
		<div class="col-lg-9">
			<form action="../controladores/agregarmaterias.php" method="POST">
				<h1>Registro de materias</h1>
				<div class="form-group">
					<label>Nombre materia</label>
					<input type="text" class="form-control" name="txtnombremate" placeholder="Ingresar nombre de la materia">
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit" value="Registar">Registrar</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>