<?php
require_once('../../Conexion.php');
require_once('../modelos/docente.php');

if($_POST){
//crear objeto de la clase docente
	$docen = new Docente();
	$Nombredoc = $_POST['txtnombredoc'];
	$Apellidodoc = $_POST['txtapellidodoc'];
	$Documentodoc = $_POST['txtdocumentodoc'];
	$Correodoc = $_POST['txtcorreodoc'];
	$Materiadoc = $_POST['txtmateriadoc'];
	$Usuariodoc = $_POST['txtusuariodoc'];
	$Passworddoc = ($_POST['txtcontrasenadoc']);
	$Perfildoc = $_POST['txtperfildoc'];
	$Estadodoc = $_POST['txtestadodoc'];

	$docen->agregarDoc($Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc,$Usuariodoc,$Passworddoc,$Perfildoc,$Estadodoc);
}
?>