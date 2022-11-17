<?php 
require_once("class.php");
$tra=new Trabajo();
if(isset($_POST["usuario"]))
{
	$b1=$_POST["usuario_comp"];
	$b2=$_POST["identidad"];
	$b3=$_POST["nrodocu"];
	$val=$tra->adicion_usu($b1,$b2,$b3);
	
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
	 		<h2>Formulario Adicion De Usuario</h2>
	 		<input type="text" class="control" name="usuario_comp" id="nombre" placeholder="Nombre Usuario">
	 		<input type="password" class="control" name="identidad" placeholder="Password">
	 		<input type="text" name="nrodocu" class="control" placeholder="Nro Documento">
	 		<input type="submit" class="boton" name="enviar" value="Enviar">
	 		<input type="hidden" name="usuario" value="si">
 		</form>
 	</div>
 	
 </body>
 </html>