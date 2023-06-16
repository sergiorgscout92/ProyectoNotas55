<?php

class Conexion
{
	protected $db;
	private $drive = "mysql";
	private $host = "localhost";
	private $dbname = "notas2023";
	private $user = "root";
	private $password = "";

	public function __construct()
	{
		try
		{
			$db = new PDO("{$this->drive}:host={$this->host};dbname={$this->dbname}",$this->user,$this->password);

			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			RETURN $db;

			echo "conexion realizada";

		}catch(PDOException $e){

			echo "se tiene problemas para conectar ".$e->getMessage();
			
		}
	}
}

?>