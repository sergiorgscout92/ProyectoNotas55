<?php
//require_once('../../Usuarios/controladores/validar.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <title>Registro de usuarios</title>
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
    <form action="../controladores/agregarusuarios.php" method="POST">
      <h1>Registro de usuarios</h1>
      <div class="form-group">
        <label>Nombre:</label>
        <input type="text" class="form-control" name="txtnombre" placeholder="Ingresar su nombre">
        <br>
      </div>
      <div class="form-group">
        <label>Apellido:</label>
        <input type="text" class="form-control"name="txtapellido" placeholder="Ingresar su apellido">
        <br>
      </div>
      <div class="form-group">
        <label>Usuario</label>
        <input type="text" class="form-control" name="txtusuario" placeholder="Ingresar su usuario">
        <br>
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="txtcontrasena" placeholder="Ingresar su contraseña">
        <br>
      </div>
      <div class="form-group">
        <label for="perfiles">Perfil</label>
        <select name="txtperfil" id="perfiles">
          <option value="Administrador">Administrador</option>
          <option value="Docente">Docente</option>
        </select>
      </div>
      <div class="form-group">
        <label for="estados">Estado</label>
        <select name="txtestado" id="estados">
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
        </select>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit" value="Registar">Registrar</button>
      </div>
      </form>
    </div>
  </div>
</body>
</html>