<?php
require_once("class.php");
$id_noti=$_POST["id_noti"];
$nombre=$_FILES['imagen']['name'];
$tipo=$_FILES['imagen']['type'];
$tamano=$_FILES['imagen']['size'];

echo "Tamaño del Archivo " . $_FILES['imagen']['size'] . " Bytes <br>";
echo "Tipo de Archivo " . $_FILES['imagen']['type'] . "<br>";

if ($tamano<2100000)
{
	if ($tipo=="image/jpeg" || $tipo=="image/jpg" || $tipo=="image/png" || $tipo=="image/gif")
	{
		$carpeta_dest=$_SERVER['DOCUMENT_ROOT'] . '/paralero_jt/imgs/';
		move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_dest.$nombre);
		$tra=new Trabajo();		
		$sub=$tra->sube_img($id_noti,$nombre);
		
	}else
	{
		echo "El Sistema Solo Permite Archivos jpg, jpg, png, gif";
	}
}else
{
	echo "El Tamaño del Archivo Supera el Valor Permitido";
}

?>