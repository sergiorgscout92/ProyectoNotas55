<?php
require_once('../../Usuarios/controladores/validar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<title></title>
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
	<br>
	<h2>BIENVENIDO: <?php echo $_SESSION['usuario'];?></h2>
	<form action="../controladores/eliminarmaterias.php" method="POST">
		<div class="container">
		<h1>ELIMINAR DOCENTE</h1>
		<?php
			require_once('../../Conexion.php');
			require_once('../modelos/materia.php');
			$mate = new Materia();
			$Id = $_GET['Id'];
		?>
			<div class="col-log-9">
				<div class="form-group">
					<label>ID MATERIA</label>
				<input type="number" name="Id" placeholder="Ingresar el id a eliminar">
				</div>
				<br>
				<input type="submit" class="btn btn-primary" value="Eliminar">
			</div>
		</div>	
			</form>
	
</body>
</html>