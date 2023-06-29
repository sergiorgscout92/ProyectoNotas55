<?php
include_once('../../Conexion.php');
class Administrador extends Conexion{
	public function __construct(){
		$this->db = parent::__construct();
	}

	public function agregarad($Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfilad,$Estadoad){

		$statement = $this->db->prepare("INSERT INTO usuarios(Nombreusu,Apellidousu,Usuario,Passwordusu,Perfil,Estado)values(:Nombread,:Apellidoad,:Usuarioad,:Passwordad,:Perfilad,:Estadoad)");

		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':Passwordad',$Passwordad);
		$statement->bindParam(':Perfilad',$Perfilad);
		$statement->bindParam(':Estadoad',$Estadoad);
		if($statement->execute()){
			echo "Usuario registrado";
			header('Location: ../pages/index.php');
		}else{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}

	//funcion para listar todos los usuarios
	public function getad(){
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil = 'Administrador'");
		$statement->execute();
		while ($resul = $statement->fetch()) {
			$row[] = $resul;
		}
		return $row;
	}

	//funcion para listar por id especifico
	public function getidad($Id){
		
		$statement = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = :Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();

		//Obtener los resultados utilizando fetch();
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		//Devolver los resultados
		return $resultado;
	}

	//funcion para actualizar los datos del usuario
	public function updatead($Id,$Nombread,$Apellidoad,$Usuarioad,$Passwordad,$Perfil,$Estadoad){

		$statement = $this->db->prepare("UPDATE usuarios SET id_usuario=:Id, Nombreusu=:Nombread, Apellidousu=:Apellidoad, Usuario=:Usuarioad, Passwordusu=:Passwordad, Perfil=:Perfil, Estado=:Estadoad WHERE id_usuario = $Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombread',$Nombread);
		$statement->bindParam(':Apellidoad',$Apellidoad);
		$statement->bindParam(':Usuarioad',$Usuarioad);
		$statement->bindParam(':Passwordad',$Passwordad);
		$statement->bindParam(':Perfil',$Perfil);
		$statement->bindParam(':Estadoad',$Estadoad);
		if ($statement->execute()) {
			header('Location: ../pages/index.php');
		}else{
			header('Location: ../pages/editar.php');
		}
	}

	//funcion para eliminar un usuario
	public function deletead($Id){

		/*$statement = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario = $Id");
		$statement->bindParam(':Id',$Id);
		if ($statement->execute()) {*/
		$statement = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario=:Id");
		$statement->bindParam(':Id',$Id);
		if($statement->execute()){
			echo "Usuario eliminado";
			header('Location: ../pages/index.php');
		}else{
			echo "El usuario no se pudo eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}
}
?>