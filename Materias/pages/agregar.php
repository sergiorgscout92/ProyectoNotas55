<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<title>Registro de materias</title>
</head>
<body>
	<div class="container">
		<div class="col-lg-9">
			<form action="../controladores/agregarmaterias.php">
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