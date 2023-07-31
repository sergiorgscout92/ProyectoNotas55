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
	<div class="container">
		<h1>LISTADO DE MATERIAS</h1>
		<div col=col-auto-mt-50>
			<table class="table table-dark table-hover">
				<tr>
					<th>ID MATERIA</th>
					<th>NOMBRE MATERIA</th>
					<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>
				</tr>
				<tbody>
					<?php
					require_once('../../Conexion.php');
					require_once('../modelos/materia.php');

					//crear el objeto para acceder a las funciones de la clase administrador
					$obj = new Materia();
					$datos = $obj->getMate();
					
					
					foreach($datos as $datos){
						?>
					<tr>
						<td><?php echo $datos['id_materia']?></td>
						<td><?php echo $datos['Nombremate']?></td>
						<td><a href="editar.php?Id=<?php echo $datos['id_materia']?>" class="btn btn-danger">ACTUALIZAR</a></td>
						<td><a href="eliminar.php?Id=<?php echo $datos['id_materia']?>" class="btn btn-primary">ELIMINAR</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>