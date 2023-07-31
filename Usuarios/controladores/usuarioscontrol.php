<?php
require_once('../../Conexion.php');
require_once('../modelos/usuario.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$usuario = $_POST['txtUsuario'];
	$contrasena = $_POST['txtPass'];

	//creamos la instancia de la clase usuario

	$use = new Usuario();

	$use->login($usuario,$contrasena);

	//redirigir el controlador de acuerdo al rol

	if($use->isinicioid()){
		if($use->isadmin()){
			header('Location: ../../Administrador/pages/index.php');
		}else if($use->isdocen()){
			header('Location: ../../Materias/pages/index.php');
		}

		exit();
	}else{
		print "<script>alert('Nombre de usuario o contraseña no válidos');window.location='../../index.php'</script>";
	}
}
?>