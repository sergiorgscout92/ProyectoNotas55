<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <title>Actualizar docentes</title>
</head>
<body>
  <div class="container">
    <div class="col-lg-9">
      <?php
    require_once('../../Conexion.php');
    require_once('../modelos/docente.php');

    $Id = $_GET['Id'];
    $doc = new Docente();

    $row=$doc->getIdDoc($Id);

    if($row){

    
  ?>
    <form action="../controladores/editardocentes.php" method="POST">
      <input type="hidden" name="Id" value="<?php echo $Id ?>">
      <h1>Actualizar datos de docentes</h1>
      <div class="form-group">
        <label>Nombre:</label>
        <input type="text" class="form-control" name="txtnombredoc" placeholder="Ingresar su nombre" value="<?php echo $row['Nombredoc']?>">
        <br>
      </div>
      <div class="form-group">
        <label>Apellido:</label>
        <input type="text" class="form-control"name="txtapellidodoc" placeholder="Ingresar su apellido" value="<?php echo $row['Apellidodoc']?>">
        <br>
      </div>
      <div class="form-group">
        <label>Documento</label>
        <input type="text" class="form-control" name="txtdocumentodoc" placeholder="Ingresar su documento" value="<?php echo $row['Documentodoc']?>">
        <br>
      </div>
      <div class="form-group">
        <label>Correo</label>
        <input type="email" class="form-control" name="txtcorreodoc" placeholder="Ingresar su correo" value="<?php echo $row['Correodoc']?>">
        <br>
      </div>
      <div class="form-group">
        <label>Materia</label>
        <input type="text" name="txtmateriadoc" placeholder="Ingresar materia" value="<?php echo $row['Materiadoc']?>">
      </div>
      <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="txtusuariodoc" placeholder="Ingresar usuario" value="<?php echo $row['Usuariodoc']?>">
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="txtcontrasenadoc" placeholder="Ingresar contraseña" value="<?php echo $row['Passworddoc']?>">
      </div>
      <div class="form-group">
        <label>Perfil</label>
        <select name="txtperfildoc" id="estadodoc" value="<?php echo $row['Perfil']?>">
          <option value="Administrador">Administrador</option>
          <option value="Docente">Docente</option>
        </select>
      </div>
      <div class="form-group">
        <label>Estado</label>
        <select name="txtestadodoc" id="estadodoc" value="<?php echo $row['Estadodoc']?>">
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
        </select>
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