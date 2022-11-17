<?php 
class Conexion
{
	private $host="localhost";
	private $user="root";
	private $pass="";
	private $base="paginabd";
	private $conectar="";

	public function __construct()
	{

		$cadena="mysql:host=".$this->host.";dbname=".$this->base.";setcharset=utf8";

		try
		{
			$this->conectar=new PDO($cadena,$this->user,$this->pass);
			$this->conectar->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}catch(exception $e)
		{
			$this->conectar="Error Al Conectar Con la ";
			echo "Base de Base Datos..Reintente".$e->getMessage();
		}
	}

	public function abrir_Conexion()
	{
		return $this->conectar;
	}
}
 ?>