<?php
require_once('../../Conexion.php');
require_once('../modelos/administrador.php');

if($_POST){
//crear objeto de la clase administrador
	$admin = new Administrador();
	$Nombreusu = $_POST['txtnombre'];
	$Apellidousu = $_POST['txtapellido'];
	$Usuariousu = $_POST['txtusuario'];
	$Passwordusu = ($_POST['txtcontrasena']);
	$Perfilusu = $_POST['txtperfil'];
	$Estadousu = $_POST['txtestado'];

	$admin->agregarad($Nombreusu,$Apellidousu,$Usuariousu,$Passwordusu,$Perfilusu,$Estadousu);
}
?>