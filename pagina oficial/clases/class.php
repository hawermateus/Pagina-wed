<?php 
//session_start();
require_once("conexion.php");

class Trabajo extends Conexion
{
	private $datos1;
	private $datos2;
	private $conexion;
	private $registros=array();

	public function __construct()
	{
		$this->conexion=new Conexion();
		$this->conexion=$this->conexion->abrir_Conexion();

	}

	public function corta_palabras($deta,$cant)
	{
		$largo=strlen($deta);
		$cadena=substr($deta,0,$cant);
		return $cadena;
	}
	
	public function traer_categorias()
	{
		$sql="select * from categorias";

		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function traer_todos()
	{
		$sql="select * from categorias";

		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function traer_noticias($inicio,$c)
	{
		$sql="select * from noticias_dia where id_ctegoria=$c order by id_noticias desc limit $inic,5";
		
		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function todas_not($inic)
	{
		$sql="select * from noticias_dia order by id_noticia asc limit $inic,10";
		
		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function traer_usu($nom,$pass)
	{
		$sql="select * from usuarios_sist where login_usu='$nom' and pass_usu='$pass'";
		$consult=$this->conexion->prepare($sql);		
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		if($result=="")
		{
			echo "<script type='text/javascript'>
			alert('Debe Identificarse Ante el Sistema... Gracias');
			window.location='../primero.php';
			</script>";

		}else
		{
			return $result;
		}
	}

	public function adicion_usu($b1,$b2,$b3)
	{
		$val="";
		$fech=date('y-m-d');
		$b2=password_hash($b2, PASSWORD_DEFAULT);

		$sql="insert into usuarios_sist(login_usu, pass_usu, fech_activ, Nro_identidad) values(:login, :pass, :fecha, :iden)";
		
		$consulta=$this->conexion->prepare($sql);
		//$consulta->BindValue(":secue",$val);
		$consulta->BindValue(":login",$b1);
		$consulta->BindValue(":pass",$b2);
		$consulta->BindValue(":fecha",$fech);
		$consulta->BindValue(":iden",$b3);
		$resultado=$consulta->execute();

		return $resultado;
	}

	public function eliminar_usu($b3){
		
		$sql="DELETE FROM usuarios_sist WHERE Nro_identidad=" .$_REQUEST['nrodocu'];
		
		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function modificar_usu($b1,$b2,$b3){
		
		$sql="update usuarios_sist set login_usu=:login, pass_usu=:pass where Nro_identidad=:iden";

		$consulta=$this->conexion->prepare($sql);
		//$consulta->BindValue(":secue",$val);
		$consulta->BindValue(":login",$b1);
		$consulta->BindValue(":pass",$b2);
		$consulta->BindValue(":fecha",$fech);
		$consulta->BindValue(":iden",$b3);
		$resultado=$consulta->execute();

		return $resultado;
	}

	public function traer_usuarios(){
		
		$sql="select * usuarios_sist";

		$consult=$this->conexion->prepare($sql);
		$consult->execute();
		$result=$consult->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	public function sube_img($id_noti,$nombre)
	{
		$sql="update noticias_dia set imagen_not='$nombre' where id_noticias='$id_noti'";

		$result=$this->conexion->query($sql);
		echo "<script type='text/javascrit'>
			alert('Imagen Adicionada Correctamente....');
			window.location='sube_imagenes.php';
		</script>";
		
	}

}	

?>