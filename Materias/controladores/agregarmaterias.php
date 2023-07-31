<?php
require_once('../../Conexion.php');
require_once('../modelos/materia.php');

    $mate=new Materia();
    if($_POST){

    $Nombremate=$_POST['txtnombremate'];
    $mate->agregarM($Nombremate);
}
?>