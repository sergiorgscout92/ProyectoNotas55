<?php
require_once('../../Conexion.php');
require_once('../modelos/estudiantes.php');

if($_POST){
//crear objeto de la clase estudiante
	$estu = new Estudiante();
	$NombreEst = $_POST['txtnombre'];
	$ApellidoEst = $_POST['txtapellido'];
	$DocumentoEst = $_POST['txtdocumento'];
	$CorreoEst = $_POST['txtcorreo'];
	$MateriaEst = $_POST['materia'];
	$DocenteEst = $_POST['docente'];
	

	$estu->agregarEst($NombreEst,$ApellidoEst,$DocumentoEst,$CorreoEst,$MateriaEst,$DocenteEst);
}
?>