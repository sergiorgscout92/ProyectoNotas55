<?php
//require_once('../../Usuarios/controladores/validar.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <title>Registro de docentes</title>
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
    <form action="../controladores/agregardocentes.php" method="POST">
      <h1>Registro de docentes</h1>
      <?php
        require_once('../../Conexion.php');
        require_once('../../consultas.php');
          $consul = new Consulta();
        ?>
      <div class="form-group">
        <label>Nombre:</label>
        <input type="text" class="form-control" name="txtnombredoc" placeholder="Ingresar su nombre">
        <br>
      </div>
      <div class="form-group">
        <label>Apellido:</label>
        <input type="text" class="form-control"name="txtapellidodoc" placeholder="Ingresar su apellido">
        <br>
      </div>
      <div class="form-group">
        <label>Documento:</label>
        <input type="text" class="form-control" name="txtdocumentodoc" placeholder="Ingresar su documento">
        <br>
      </div>
      <div class="form-group">
        <label>Correo:</label>
        <input type="email" class="form-control" name="txtcorreodoc" placeholder="Ingresar su correo">
        <br>
      </div>
      <div class="form-group">
          <label>Materia:</label>
          <select name="txtmateriadoc" id="materia">
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
        <label>Usuario:</label>
        <input type="text" class="form-control" name="txtusuariodoc" placeholder="Ingresar usuario">
      </div>
      <div class="form-group">
        <label>Contraseña:</label>
        <input type="password" class="form-control" name="txtcontrasenadoc" placeholder="Ingresar contraseña">
      </div>
      <div class="form-group">
        <label>Perfil:</label>
        <select name="txtperfildoc" id="perfiles">
          <option value="Administrador">Administrador</option>
          <option value="Docente">Docente</option>
        </select>
      </div>
      <div class="form-group">
        <label>Estado:</label>
        <select name="txtestadodoc" id="estadodoc">
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