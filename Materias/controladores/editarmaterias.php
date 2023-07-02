<?php
require_once('../../Conexion.php');
require_once('../modelos/materia.php');

$mate = new Materia();
if($_POST){
	$Id = $_POST['Id'];
	$Nombremate = $_POST['txtnombremate'];

$mate->updateMate($Id,$Nombremate);
}


?>