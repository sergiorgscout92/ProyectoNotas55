<?php
require_once('../../Conexion.php');
require_once('../modelos/estudiantes.php');

$estu = new Estudiante();
if($_POST){
	$Id = $_POST['Id'];
	$Nombredoc = $_POST['txtnombredoc'];
	$Apellidodoc = $_POST['txtapellidodoc'];
	$Documentodoc = $_POST['txtdocumentodoc'];
	$Correodoc = $_POST['txtcorreodoc'];
	$Materiadoc = $_POST['txtmateriadoc'];
	$DocenteEst = $_POST['txtdocente'];

	$estu->updateEst($Id,$NombreEst,$ApellidoEst,$DocumentoEst,$CorreoEst,$MateriaEst,$DocenteEst);
}
?>