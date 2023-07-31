<?php
require_once('../../Usuarios/controladores/validar.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <title>Actualizar usuarios</title>
</head>
<body>
  <h2>BIENVENIDO: <?php echo $_SESSION['usuario'];?></h2>
  <div class="container">
    <div class="col-lg-9">
      <?php
    require_once('../../Conexion.php');
    require_once('../modelos/administrador.php');

    $Id = $_GET['Id'];
    $admin = new Administrador();

    $row=$admin->getidad($Id);

    if($row){

    
  ?>
  <nav nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class="navbar-nav">
      <a class="btn btn-primary" href="../../Administrador/pages/agregar.php">Usuarios</a>
      <a class="btn btn-primary" href="../../Docentes/pages/agregar.php">Docentes</a>
      <a class="btn btn-primary" href="../../Estudiantes/pages/agregar.php">Estudiantes</a>
      <a class="btn btn-primary" href="../../Materias/pages/agregar.php">Materias</a>
      <a class="btn btn-danger" href="../../Usuarios/controladores/salir.php">Cerrar Sesión</a>
    </ul>
  </nav>
    <form action="../controladores/editarusuario.php" method="POST">
      <input type="hidden" name="Id" value="<?php echo $Id ?>">
      <h1>Actualizar datos de usuarios</h1>
      <div class="form-group">
        <label>Nombre:</label>
        <input type="text" class="form-control" name="txtnombre" placeholder="Ingresar su nombre" value="<?php echo $row['Nombreusu'] ?>">
        <br>
      </div>
      <div class="form-group">
        <label>Apellido:</label>
        <input type="text" class="form-control"name="txtapellido" placeholder="Ingresar su apellido" value="<?php echo $row['Apellidousu'] ?>">
        <br>
      </div>
      <div class="form-group">
        <label>Usuario</label>
        <input type="text" class="form-control" name="txtusuario" placeholder="Ingresar su usuario" value="<?php echo $row['Usuario'] ?>">
        <br>
      </div>
      <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="txtcontrasena" placeholder="Ingresar su contraseña"
        value="<?php echo $row['Passwordusu'] ?>">
        <br>
      </div>
      <div class="form-group">
        <label for="perfiles">Perfil</label>
        <select name="txtperfil" id="perfiles" value=<?php echo $row['Peril'] ?>>
          <option value="Administrador">Administrador</option>
          <option value="Docente">Docente</option>
        </select>
      </div>
      <div class="form-group">
        <label for="estados">Estado</label>
        <select name="txtestado" id="estados" value=<?php echo $row['Estado'] ?>>
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