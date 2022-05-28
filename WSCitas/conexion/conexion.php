<?php
//Activar al tenerlo listo el ws please
//error_reporting(0);
class Conexion
{
	private $host = "sql5.freemysqlhosting.net";
	private $db = "sql5495843";
	private $user = "sql5495843";
	private $passw = "CdajN4sJRI";

	private static $conexion = null;
	private $con;

	private function __construct()
	{
		try {
			//Cadena de conexion
			$this->con = new PDO(
				"mysql:host=$this->host;
				dbname=$this->db",
				$this->user,
				$this->passw
			);
		} catch (PDOException $e) {
			echo "Error: " . $e;
		}
	}

	public static function 	getInstance()
	{
		if (!self::$conexion) {
			self::$conexion = new Conexion();
		}
		return self::$conexion;
	}

	public function getPrepareStatement($sql)
	{
		return $this->con->prepare($sql);
	}
}
