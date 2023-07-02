<?php
require_once('../../Conexion.php');
require_once('../modelos/materia.php');

//verificación del formulario enviado
$mate = new Materia();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$Id = $_POST['Id'];
	$result = $mate->deleteMate($Id);
	if($result){
		print "<script>alert('materia eliminada');
		window.location='../pages/index.php';</script>";
	}else{
		print "<script>alert('materia no eliminada');
		window.location='../pages/eliminar.php';</script>";
	}
}
?>