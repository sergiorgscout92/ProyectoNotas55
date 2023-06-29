<?php
include_once('../../Conexion.php');
class Docente extends Conexion{
	public function __construct(){
		$this->db = parent::__construct();
	}

	public function agregarDoc($NombreDoc,$ApellidoDoc,$DocumentoDoc,$CorreoDoc,$MateriaDoc,$UsuarioDoc,$PasswordDoc,$PerfilDoc,$EstadoDoc){

		$statement = $this->db->prepare("INSERT INTO docentes(Nombredoc,Apellidodoc,Documentodoc,Correodoc,Materiadoc,Usuariodoc,Passworddoc,Perfil,Estadodoc)values(:NombreDoc,:ApellidoDoc,:DocumentoDoc,:CorreoDoc,:MateriaDoc,:UsuarioDoc,:PasswordDoc,:PerfilDoc,:EstadoDoc)");
		$statement->bindParam(':NombreDoc',$NombreDoc);
		$statement->bindParam(':ApellidoDoc',$ApellidoDoc);
		$statement->bindParam(':DocumentoDoc',$DocumentoDoc);
		$statement->bindParam(':CorreoDoc',$CorreoDoc);
		$statement->bindParam('MateriaDoc',$MateriaDoc);
		$statement->bindParam(':UsuarioDoc',$UsuarioDoc);
		$statement->bindParam(':PasswordDoc',$PasswordDoc);
		$statement->bindParam(':PerfilDoc',$PerfilDoc);
		$statement->bindParam(':EstadoDoc',$EstadoDoc);
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
		$statement = $this->db->prepare("SELECT * FROM docentes WHERE Perfil = 'Docente'");
		$statement->execute();
		while ($resul = $statement->fetch()) {
			$row[] = $resul;
		}
		return $row;
	}

	//funcion para listar por id especifico
	public function getIdDoc($Id){
		$statement = $this->db->prepare("SELECT * FROM docentes WHERE id_docente = :Id");
		$statement->bindParam(':Id',$Id);
		$statement->execute();

		//Obtener los resultados utilizando fetch();
		$resultado = $statement->fetch(PDO::FETCH_ASSOC);

		//Devolver los resultados
		return $resultado;
	}

	//funcion para actualizar los datos del docente
	public function updateDoc($Id,$NombreDoc,$ApellidoDoc,$DocumentoDoc,$CorreoDoc,$MateriaDoc,$UsuarioDoc,$PasswordDoc,$PerfilDoc,$EstadoDoc){

		$statement = $this->db->prepare("UPDATE docentes SET id_docente=:Id, Nombredoc=:NombreDoc, Apellidodoc=:ApellidoDoc, Documentodoc=:DocumentoDoc, Correodoc=:CorreoDoc, Materiadoc=:MateriaDoc,Usuariodoc=:UsuarioDoc,Passworddoc=:PasswordDoc,Perfil=:PerfilDoc,Estadodoc=:EstadoDoc WHERE id_docente = $Id");

		$statement->bindParam(':Id',$Id);
		$statement->bindParam(':NombreDoc',$NombreDoc);
		$statement->bindParam(':ApellidoDoc',$ApellidoDoc);
		$statement->bindParam(':DocumentoDoc',$DocumentoDoc);
		$statement->bindParam(':CorreoDoc',$CorreoDoc);
		$statement->bindParam(':MateriaDoc',$MateriaDoc);
		$statement->bindParam(':UsuarioDoc',$UsuarioDoc);
		$statement->bindParam(':PasswordDoc',$PasswordDoc);
		$statement->bindParam(':PerfilDoc',$PerfilDoc);
		$statement->bindParam(':EstadoDoc',$EstadoDoc);
		if ($statement->execute()) {
			header('Location: ../pages/index.php');
		}else{
			header('Location: ../pages/editar.php');
		}
	}

	//funcion para eliminar un docente
	public function deleteDoc($Id){
		$statement = $this->db->prepare("DELETE FROM docentes WHERE id_docente=:Id");
		$statement->bindParam(':Id',$Id);
		if($statement->execute()){
			echo "Docente eliminado";
			header('Location: ../pages/index.php');
		}else{
			echo "El docente no se pudo eliminar";
			header('Location: ../pages/eliminar.php');
		}
	}
}
?>