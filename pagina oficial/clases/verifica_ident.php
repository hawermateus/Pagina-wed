<?php 
session_start();
require_once("class.php");
$tra=new Trabajo();
if(isset($_POST["usuario_comp"]) and $_POST["usuario"]="si")
{
	$_SESSION['usuario_comp']=$_POST["usuario_comp"];
	//print_r($_SESSION);
		$nom=$_POST["usuario_comp"];
 		$pass=$_POST["identidad"];
 		$valo=$tra->traer_usu($nom,$pass);
 		if(count($valo)==1)
 		{
 			echo "<script type='text/javascript'>
			alert('Bienvenido al sistema de Administracion ');
			window.location='../crud_noticias.php';
			</script>";
		}else
		{
			echo "<script type='text/javascript'>
			alert('Debe Identificarse Ante el Sistema... Gracias');
			</script>";
		}
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" href="../estilos/esti_usu.css">
 	<title>Validacion Usuario</title>
 </head>
 <body>
 	<div class="registro">
 		<form action="" method="post">
	 		<h2>Formulario Validacion Usuario</h2>
	 		<input type="text" class="control" name="usuario_comp" id="nombre" placeholder="Nombre Usuario" required="1">
	 		<input type="password" class="control" name="identidad" placeholder="Password" required=1>
	 		<input type="submit" class="boton" name="enviar" value="Enviar">
	 		<input type="hidden" name="usuario" value="si">
 		</form>
 	</div>
 	
 </body>
 </html>