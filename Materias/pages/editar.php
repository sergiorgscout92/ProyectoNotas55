<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <title>Actualizar materias</title>
</head>
<body>
  <div class="container">
    <div class="col-lg-9">
      <?php
    require_once('../../Conexion.php');
    require_once('../modelos/materia.php');

    $Id = $_GET['Id'];
    $mate = new Materia();

    $row=$mate->getIdMate($Id);

    if($row){

    
  ?>
    <form action="../controladores/editarmaterias.php" method="POST">
      <input type="hidden" name="Id" value="<?php echo $Id ?>">
      <h1>Actualizar datos de las materias</h1>
      <div class="form-group">
        <label>Nombre de la materia:</label>
        <input type="text" class="form-control" name="txtnombremate" placeholder="Ingresar nombre de la materia" value="<?php echo $row['Nombremate']?>">
        <br>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" value="Actualizar">Actualizar</button>
      </div>
      </form>
    <?php } ?>
    </div>
  </div>
</body>
</html>