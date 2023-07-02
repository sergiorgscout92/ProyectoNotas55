<?php
require_once('../../Conexion.php');
require_once('../modelos/materia.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
//crear objeto de la clase materias
	$mate = new Materia();
	$Nombremate = $_POST['txtnombremate'];

	$mate->agregarM($Nombremate);
}
?>