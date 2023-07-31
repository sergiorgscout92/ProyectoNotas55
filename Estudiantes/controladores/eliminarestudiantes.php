<?php
require_once('../../Conexion.php');
require_once('../modelos/estudiantes.php');

//verificación del formulario enviado
$est = new Estudiante();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$Id = $_POST['Id'];
	$result = $est->deleteEst($Id);
	if($result){
		print "<script>alert('Estudiante eliminado');
		window.location='../pages/index.php';</script>";
	}else{
		print "<script>alert('Estudiante no eliminado');
		window.location='../pages/eliminar.php';</script>";
	}
}
?>