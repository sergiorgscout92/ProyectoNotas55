<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<title></title>
</head>
<body>
	<br>
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