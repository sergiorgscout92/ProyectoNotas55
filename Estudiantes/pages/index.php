<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<title>Estudiantes</title>
</head>
<body>
	<div class="container">
		<h1 style="color:darkgray; text-align: center;">LISTADO DE DOCENTES</h1>
		<div col=col-auto-mt-50>
			<table class="table table-dark table-hover">
				<tr>
					<th>ID ESTUDIANTE</th>
					<th>NOMBRE</th>
					<th>APELLIDO</th>
					<th>DOCUMENTO</th>
					<th>CORREO</th>
					<th>MATERIA</th>
					<th>DOCENTE</th>
					<th>PROMEDIO</th>
					<th>FECHA DE REGISTRO</th>
					<th>ACTUALIZAR</th>
					<th>ELIMINAR</th>
				</tr>
				<tbody>
					<?php
					require_once('../../Conexion.php');
					require_once('../modelos/estudiantes.php');

					//crear el objeto para acceder a las funciones de la clase estudiante
					$obj = new Estudiante();
					$datos = $obj->getEst();
					
					
					foreach($datos as $datos){
						?>
					<tr>
						<td><?php echo $datos['id_estudiante']?></td>
						<td><?php echo $datos['nombre']?></td>
						<td><?php echo $datos['apellido']?></td>
						<td><?php echo $datos['documento']?></td>
						<th><?php echo $datos['correo']?></th>
						<th><?php echo $datos['materia']?></th>
						<th><?php echo $datos['docente']?></th>
						<td><?php echo $datos['promedio']?></td>
						<td><?php echo $datos['fecha_registro']?></td>
						<td><a href="editar.php?Id=<?php echo $datos['id_estudiante']?>" class="btn btn-danger">ACTUALIZAR</a></td>
						<td><a href="eliminar.php?Id=<?php echo $datos['id_estudiante']?>" class="btn btn-primary">ELIMINAR</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>