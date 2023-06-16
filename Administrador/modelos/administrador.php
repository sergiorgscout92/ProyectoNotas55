<?php
include_once('../../Conexion.php');
class Administrador extends Conexion{
	public funcion __construct(){
		$this->db = parent::__construct();
	}

	public fuction agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad){

		$statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)values(:Nombread,:Apellidoad:;Usuarioad,:Passwordad,:Perfilad,:Estadoad)");

		$statement->bindParam(":Nombread",$Nombread);
		$statement->bindParam(":Apellidoad",$Apellidoad);
		$statement->bindParam(":Usuarioad",$Usuarioad);
		$statement->bindParam(":Passwordad",$Passwordad);
		$statement->bindParam(":Perfilad",$Perfilad);
		$statement->bindParam(":Estadoad",$Estadoad);
		if($statement->execute()){
			echo "Usuario registrado";
		}else{
			echo "No se puede realizar el registro";
		}
	}
}
?>