<?php
include_once('../../Conexion.php');
class Docente extends Conexion{
	public funcion __construct(){
		$this->db = parent::__construct();
	}

	public function agregarDoc($NombreDoc,$ApellidoDoc,$DocumentoDoc,$CorreoDoc,$MateriaDoc,$NotasMateDoc){

		$statement = $this->db->prepare("INSERT INTO docentes(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Notasmate)values(:NombreDoc,:ApellidoDoc,:DocumentoDoc,:CorreoDoc,:MateriaDoc,:NotasMateDoc)");
		$statement->bindParam(':NombreDoc',$NombreDoc);
		$statement->bindParam(':ApellidoDoc',$ApellidoDoc);
		$statement->bindParam(':DocumentoDoc',$DocumentoDoc);
		$statement->bindParam(':CorreoDoc',$CorreoDoc);
		$statement->bindParam('MateriaDoc',$MateriaDoc);
		$statement->bindParam(':NotasMateDoc',$NotasMateDoc);
		if ($statement->execute()) {
			echo "Docente registrado";
			header('Location: ../pages/index.php');
		}else{
			echo "Error al registrar docente";
			header('Location: ../pages/agregar.php');
		}
	}

	//funcion para listar todos los usuarios
	public function getDoc(){
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM docentes WHERE Documentodoc = :DocumentoDoc");
		$tatement->execute();
		while ($resul = $statement->fetch()) {
			$row[] = $resul;
		}
		return $row;
	}

	//funcion para listar por id especifico
	public function getIdDoc($Id){
		$row = null;
		$statement = $this->db->prepare("SELECT * FROM docentes WHERE Documentodoc=:DocumentoDoc AND id_docente=:Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();
		while ($resul = $statement->fetch()) {
			$row[] = $resul;
		}
		return $row;
	}

	//funcion para actualizar los datos del docente
	public function updateDoc($NombreDoc,$ApellidoDoc,$DocumentoDoc,$CorreoDoc,$MateriaDoc,$NotasMateDoc){

		$statement = $this->db->prepare("UPDATE * FROM docentes SET Nombredoc=:NombreDoc, Apellidodoc=:ApellidoDoc, Documentodoc=:DocumentoDoc, Correodoc=:CorreoDoc, Materiadoc=:MateriaDoc, Notasmate=:NotasMateDoc WHERE id_docente = $Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':NombreDoc',$NombreDoc);
		$statement->bindParam(':ApellidoDoc',$ApellidoDoc);
		$statement->bindParam(':DocumentoDoc',$DocumentoDoc);
		$statement->bindParam(':CorreoDoc',$CorreoDoc);
		$statement->bindParam(':MateriaDoc',$MateriaDoc);
		$statement->bindParam(':NotasMateDoc',$NotasMateDoc);
		if ($statement->execute()) {
			header('Location: ../pages/index.php');
		}else{
			header('Location: ../pages/editar.php');
		}
	}

	//funcion para eliminar un docente
	public function deleteDoc($Id){

		$statement = $this->db->prepare("DELETE * FROM docentes WHERE id_usuario = $Id");
		$statement->bindParam(':Id',$Id);
		if ($statement->execute()) {
			echo "Docente eliminado";
			header('Location: ../pages/index.php')
		}else{
			echo "El docente no se pudo eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}
}
?>