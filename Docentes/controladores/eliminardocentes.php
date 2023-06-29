<?php
require_once('../../Conexion.php');
require_once('../modelos/docente.php');

//verificación del formulario enviado
$doc = new Docente();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$Id = $_POST['Id'];
	$result = $doc->deleteDoc($Id);
	if($result){
		print "<script>alert('usuario eliminado');
		window.location='../pages/index.php';</script>";
	}else{
		print "<script>alert('usuario no eliminado');
		window.location='../pages/eliminar.php';</script>";
	}
}
?>