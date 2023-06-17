<?php
include_once('../../Conexion.php');
class Estudiantes extends Conexion
{
	public function __construct()
	{
		$this->db = parent::__construct();
	}
	//inserta un usuario
	public function agregared($nombreEd,$apellidoEd,$documentoEd,$correoEd,$materiaEd,$docenteEd,$promedioEd,$fecha_registroEd)
	{
		$statement = $this->db->prepare("INSERT INTO estudiantes(nombre,apellido,documento,correo,materia,docente,promedio,fecha_registro)values(:nombreEd,:apellidoEd,:documentoEd,:correoEd,:materiaEd,:docenteEd,:promedioEd,fecha_registroEd");

		$statement->bindParam(":nombreEd",$nombreEd);
		$statement->bindParam(":apellidoEd",$apellidoEd);
		$statement->bindParam(":documentoEd",$documentoEd);
		$statement->bindParam(":correoEd",$correoEd);
		$statement->bindParam(":materiaEd",$materiaEd);
		$statement->bindParam(":docenteEd",$docenteEd);
		$statement->bindParam(":promedioEd",$promedioEd);
		$statement->bindParam(":fecha_registroEd",$fecha_registroEd);
		if($statement->execute())
		{
			echo "usuario registrado";
			header('Location: ../pages/index.php');
		}else
		{
			echo "No se puede realizar el registro";
			header('Location: ../pages/agregar.php');
		}
	}

	//funcion para seleccionar todos los usuarios con el rol estudiante

	public function geted()
	{

		$row = null;
		$statement=$this->db->prepare("SELECT * FROM estudiantes WHERE documento=:documentoEd");
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row[]=$resul;
		}
		return $row;

	}
	//funcion para seleccionar un usuario por su id
	public function getided($Id)
	{

		$row = null;
		$statement=$this->db->prepare("SELECT * FROM estudiantes WHERE documento=:documentoEd AND id_Estudiante=Id");
		$statemenet->bindParam(':Id',$Id);
		$statement->execute();
		while($resul = $statement->fetch())
		{
			$row[]=$resul;
		}
		return $row;

	}
	//funcion para actualizar los datos del estudiante
	public function updateEd($id,$nombreEd,$apellidoEd,$documentoEd,$correoEd,$materiaEd,$docenteEd,$promedioEd,$fecha_registroEd)
	{

		$statement=$this->db->prepare("UPDATE estudiantes SET nombre=:nombreEd, apellido=:apellidoEd, documento=:documentoEd, correo=:correoEd, materia=:materiaEd, docente=:docenteEd, promedio=:promedioEd, fecha_registro=:fecha_registroEd WHERE id_Estudiante=$Id");
		$statement=bindParam(':Id',$Id);
		$statement->bindParam(":nombreEd",$nombreEd);
		$statement->bindParam(":apellidoEd",$apellidoEd);
		$statement->bindParam(":documentoEd",$documentoEd);
		$statement->bindParam(":correoEd",$correoEd);
		$statement->bindParam(":materiaEd",$materiaEd);
		$statement->bindParam(":docenteEd",$docenteEd);
		$statement->bindParam(":promedioEd",$promedioEd);
		$statement->bindParam(":fecha_registroEd",$fecha_registroEd);
		if ($statement->execute()) 
		{
			header('Location: ../pages/index.php');
		}else
		{
			header('Location ../pages/editar.php')
		}

	}
	//funcion para eliminar un usuario
	public function deleteEd($Id)
	{

		$statement=$this->db->prepare("DELETE * FROM estudiantes WHERE id_Estudiante=:Id");
		$statement->bindParam(':Id',$Id);
		if($statement->execute())
		{
			echo "Estudiante eliminado";
			header('Location: ../pages/index.php');
		}else{
			echo "El estudiante no se pudo eliminar";
			header('Location: ../pages/eliminar.php')
		}

	}
}

?>