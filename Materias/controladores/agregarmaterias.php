<?php
require_once('../../Conexion.php');
require_once('../modelos/materias.php');

if($_POST){
//crear objeto de la clase materias
	$mate = new Materias();
	$Nombremate = $_POST['txtnombremate'];

	$mate->agregarM($Nombremate);
}
?>