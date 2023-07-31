<?php
if($_POST['txtUsuario']=='Sergio Romero' && $_POST['txtPass']=='18061946'){
	//CREAR LA SESION

	session_start();

	//definir variables de la sesión

	$_SESSION['usuario'] = $_POST['txtUsuario'];
	$_SESSION['validar'] = true;
	$_SESSION['start'] = time();
	$_SESSION['expire'] = $_SESSION['start'] + (1*60);
	header("Location: ../../Administrador/pages/index.php");
}else{
	print "<script>alert(\"Verifique los datos de ingreso \");
	window.location='../../index.php';</script>";
}
?>