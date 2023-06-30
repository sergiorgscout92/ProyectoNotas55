<?php
require_once('../../conexion.php');
require_once('../modelos/administrador.php');

//Verificacion del formulario enviado
$ad= new Administrador();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

	$Id = $_POST['Id'];
	$resultado=$ad->deletead($Id);
	if($result)
	{
		print "<script>alert('Usuario Eliminado');
		window.location='../pages/index.php';</script>";
	}else {
		print "<script>alert('Usuario No Eliminado');
		window.location='../pages/eliminar.php';</script>";
	}
}



?>