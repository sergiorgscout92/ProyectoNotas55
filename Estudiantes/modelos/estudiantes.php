<?php
class Estudiante extends Conexion{
	public function __construct(){
		$this->db = parent::__construct();
	}

	public function agregarEst($NombreEst,$ApellidoEst,$DocumentoEst,$CorreoEst,$MateriaEst,$DocenteEst){

		$statement = $this->db->prepare("INSERT INTO estudiantes(nombre,apellido,documento,correo,materia,docente)values(:NombreEst,:ApellidoEst,:DocumentoEst,:CorreoEst,:MateriaEst,:DocenteEst)");
		$statement->bindParam(':NombreEst',$NombreEst);
		$statement->bindParam(':ApellidoEst',$ApellidoEst);
		$statement->bindParam(':DocumentoEst',$DocumentoEst);
		$statement->bindParam(':CorreoEst',$CorreoEst);
		$statement->bindParam('MateriaEst',$MateriaEst);
		$statement->bindParam(':DocenteEst',$DocenteEst);
		if ($statement->execute()) {
			echo "Estudiante registrado";
			header('Location: ../pages/index.php');
		}else{
			echo "Error al registrar estudiante";
			header('Location: ../pages/agregar.php');
		}
	}

	//funcion para listar todos los usuarios
	public function getEst(){
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM estudiantes");
		$statement->execute();
		while ($resul = $statement->fetch()) {
			$row[] = $resul;
		}
		return $row;
	}

	/*funcion para listar por id especifico*/
	public function getIdEst($Id){
		$statement = $this->db->prepare("SELECT * FROM estudiantes WHERE id_estudiante = :Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();

		/*Obtener los resultados utilizando fetch()*/
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		/*Devolver los resultados*/
		return $resultado;
	}

	/*funcion para actualizar los datos del estudiante*/
	public function updateEst($Id,$NombreEst,$ApellidoEst,$DocumentoEst,$CorreoEst,$MateriaEst,$DocenteEst){

		$statement = $this->db->prepare("UPDATE estudiantes SET id_estudiante=:Id, nombre=:NombreEst, apellido=:ApellidoEst, documento=:DocumentoEst, correo=:CorreoEst, materia=:MateriaEst,docente=:DocenteEst WHERE id_estudiante = $Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':NombreEst',$NombreEst);
		$statement->bindParam(':ApellidoEst',$ApellidoEst);
		$statement->bindParam(':DocumentoEst',$DocumentoEst);
		$statement->bindParam(':CorreoEst',$CorreoEst);
		$statement->bindParam('MateriaEst',$MateriaEst);
		$statement->bindParam(':DocenteEst',$DocenteEst);
		if ($statement->execute()) {
			header('Location: ../pages/index.php');
		}else{
			header('Location: ../pages/editar.php');
		}
	}

	/*funcion para eliminar un docente*/
	public function deleteEst($Id){
		$statement = $this->db->prepare("DELETE FROM estudiantes WHERE id_estudiante=:Id");
		$statement->bindParam(':Id',$Id);
		if($statement->execute()){
			echo "Estudiante eliminado";
			header('Location: ../pages/index.php');
		}else{
			echo "El estudiante no se pudo eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}
}
?>