<?php 
require_once("class.php");

$obj=new Trabajo();
$datos=$obj->traer_todos();
print_r($datos);




 ?>