<?php
require_once('../../Conexion.php');
require_once('../modelos/estudiantes.php');

if($_POST){
//crear objeto de la clase docente
	$estu = new Estudiante();
	$NombreEst = $_POST['txtnombre'];
	$ApellidoEst = $_POST['txtapellido'];
	$DocumentoEst = $_POST['txtdocumento'];
	$CorreoEst = $_POST['txtcorreo'];
	$MateriaEst = $_POST['txtmateria'];
	$DocenteEst = $_POST['txtdocumento'];
	$PromedioEst = $_POST['txtpromedio'];
	$FechaReg = $_POST['txtfechareg'];

	$estu->agregarEst($NombreEst,$ApellidoEst,$DocumentoEst,$CorreoEst,$MateriaEst,$DocenteEst,$PromedioEst,$FechaReg);
}
?>