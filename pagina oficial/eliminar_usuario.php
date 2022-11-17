<?php
require_once("./clases/class.php");
$tra=new Trabajo();
if(isset($_POST["usuario"]))
{
    $b3=$_POST["nrodocu"];
    $val=$tra->eliminar_usu($b3);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar usuario</title>
</head>
<body>
    <div class="registro">
        <form action="" method="post">
            <h2>Formulario Eliminacion de Usuario</h2>
            <input type="text" name="nrodocu" class="control" placeholder="Nro Documento">
            <input type="submit" class="boton" name="eliminar" value="Eliminar">
            <input type="hidden" name="usuario" value="si">
        </form>
    </div>
</body>
</html>