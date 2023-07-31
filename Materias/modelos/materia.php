<?php
include_once('../../Conexion.php');
class Materia extends Conexion
{
	public function __construct(){
		$this->db = parent::__construct();
	}

	public function agregarM($Nombremate){
		/*	$statement=$this->db->prepare("INSERT INTO materias(Nombremate)values(:Nombremate)");

		$statement->bindParam(':Nombremate',$Nombremate);
		if ($statement->execute()) {
			echo "Materia registrada";
			header('Location: ../pages/index.php');
		}else{
			echo "Error al registrar materia";
			header('Location: ../pages/agregar.php');
		}*/

		$statement=$this->db->prepare("INSERT INTO materias(Nombremate)VALUES(:Nombremate)");
		$statement->bindParam(':Nombremate',$Nombremate);

		if($statement->execute()){
			echo "Materia registrada";
			header('Location: ../pages/index.php');
		}else{
			echo "Error al registrar la materia";
			header('Location: ../pages/agregar.php');
		}
	}

	//funcion para listar todas las materias
	public function getMate(){
		/*$row = null;
		$statement = $this->db->prepare("SELECT * FROM materias WHERE Nombremate = :Nombremate");
		$statement->execute();
		while ($resul = $statement->fetch()) {
			$row[] = $resul;
		}
		return $row;*/

		$row = null;
			$statement = $this->db->prepare("SELECT * FROM materias");
			$statement->execute();
			while ($result = $statement->fetch()) 
			{
				$row[] = $result;	
			}
			return $row;
	}

	//funcion para listar por id especifico
	public function getIdMate($Id){
		/*$row = null;
		$statement = $this->db->prepare("SELECT * FROM materias WHERE Nombremate=:Nombremate AND id_materia=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();
		while ($resul = $statement->fetch()) {
			$row[] = $resul;
		}
		return $row;*/
		$statement = $this->db->prepare("SELECT * FROM materias WHERE id_materia = :Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();

		//Obtener los resultados utilizando fetch();
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		//Devolver los resultados
		return $resultado;
	}

	//funcion para actualizar los datos de las materias
	public function updateMate($Nombremate){

		$statement = $this->db->prepare("UPDATE materias SET Nombremate=:Nombremate WHERE id_materia = :Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':Nombremate',$Nombremate);
		if ($statement->execute()) {
			header('Location: ../pages/index.php');
		}else{
			header('Location: ../pages/editar.php');
		}
	}

	//funcion para eliminar una materia
	public function deleteMate($Id){

		$statement = $this->db->prepare("DELETE FROM docentes WHERE id_materia = :Id");
		$statement->bindParam(':Id',$Id);
		if ($statement->execute()) {
			echo "Materia eliminada";
			header('Location: ../pages/index.php');
		}else{
			echo "La materia no se pudo eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}
}

?>