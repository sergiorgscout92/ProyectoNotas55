<?php
include_once('../../Conexion.php');
class Materias extends Conexion
{
	public function __construct(){
		$this->db = parent::__construct();
	}

	public function agregarM($Nombremate){
		$statement=$this->db->prepare("INSERT INTO materias(Nombremmate)values(:Nombremate)");

		$statement->bindParam(':Nombremate',$Nombremate);
		if ($statement->execute()) {
			echo "Materia registrada";
			header('Location: ../pages/index.php');
		}else{
			echo "Error al registrar materia";
			header('Location: ../pages/agregar.php');
		}
	}

	//funcion para listar todas las materias
	public function getMate(){
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM materias WHERE Nombremate = :Nombremate");
		$tatement->execute();
		while ($resul = $statement->fetch()) {
			$row[] = $resul;
		}
		return $row;
	}

	//funcion para listar por id especifico
	public function getIdMate($Id){
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM materias WHERE Nombremate=:Nombremate AND id_materia=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();
		while ($resul = $statement->fetch()) {
			$row[] = $resul;
		}
		return $row;
	}

	//funcion para actualizar los datos de las materias
	public function updateMate($Nombremate){

		$statement = $this->db->prepare("UPDATE * FROM materias SET Nombremate=:Nombremate WHERE id_materia = $Id");

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

		$statement = $this->db->prepare("DELETE * FROM docentes WHERE id_materia = $Id");
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