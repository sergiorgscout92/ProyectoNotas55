<?php
require_once('../../Conexion.php');
require_once('../modelos/docente.php');

$doc = new Docente();
if($_POST){
	$Id = $_POST['Id'];
	$Nombredoc = $_POST['txtnombredoc'];
	$Apellidodoc = $_POST['txtapellidodoc'];
	$Documentodoc = $_POST['txtdocumentodoc'];
	$Correodoc = $_POST['txtcorreodoc'];
	$Materiadoc = $_POST['txtmateriadoc'];
	$Usuariodoc = $_POST['txtusuariodoc'];
	$Passworddoc = MD5($_POST['txtcontrasenadoc']);
	$Perfildoc = $_POST['txtperfildoc'];
	$Estadodoc = $_POST['txtestadodoc'];

$doc->updateDoc($Id,$Nombredoc,$Apellidodoc,$Documentodoc,$Correodoc,$Materiadoc,$Usuariodoc,$Passworddoc,$Perfildoc,$Estadodoc);
}


?>