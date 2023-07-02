<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<title>Registro Estudiantes</title>
</head>
<body>
	<div class="container">
		<div class="col-lg-9">
			<form action="../controladores/agregarestudiantes.php" method="POST">
				<h1>Registro de Estudiantes</h1>
				<?php
				require_once('../../Conexion.php');
				require_once('../../consultas.php');
					$consul = new Consulta();
				?>
				<div class="form-group">
					<label>Nombre:</label>
					<input type="text" class="form-control" name="txtnombre" id="nombre" placeholder="Ingresar nombre de estudiante">
				</div>
				<div class="form-group">
					<label>Apellido:</label>
					<input type="text" class="form-control" name="txtapellido" id="apellido" placeholder="Ingresar apellido de estudiante">
				</div>
				<div class="form-group">
					<label>Documento:</label>
					<input type="text" class="form-control" name="txtdocumento" id="documento" placeholder="Ingresar docmento de estudiante">
				</div>
				<div class="form-group">
					<label>Correo:</label>
					<input type="email" class="form-control" name="txtcorreo" id="correo" placeholder="Ingresar correo de estudiante">
				</div>
				<div class="form-group">
					<label>Materia:</label>
					<select name="txtmateria" id="materia">
						<option>Seleccionar</option>
						<?php
							$mate = $consul->getMate();
							if($mate != null){
								foreach ($mate as $ma){
						?>
						<option value="<?php echo $ma['Nombremate'] ?>"><?php echo $ma['Nombremate'] ?></option>
						<?php
								}
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Docente:</label>
					<select name="txtdocente" id="docente">
						<option>Seleccionar</option>
						<?php
							$doce = $consul->getDoc();
							if($doce != null){
								foreach($doce as $do){
						?>
						<option value="<?php echo $do['Nombredoc'] ?>"><?php echo $do['Nombredoc'] ?></option>
						<?php
								}
							}
						?>						
					</select>
				</div>
				<div class="form-group">
					<label>Promedio:</label>
					<input type="text" class="form-control" name="txtpromedio" placeholder="Ingresar promedio de estudiante">
				</div>
				<div class="form-group">
					<label>Fecha de registro:</label>
					<input type="date" class="form-control" name="txtfechare">
				</div>
				<div class="form-group">
        			<button class="btn btn-primary" type="submit" value="Registar">Registrar</button>
      			</div>
			</form>
		</div>
	</div>
</body>
</html>