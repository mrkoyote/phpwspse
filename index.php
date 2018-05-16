<?php

//se toma variable de controlador
if(!isset($_GET['c']))
{
	$_GET['c']="inicio";
}
//se inicia con la utenticacion
require_once("config/laconexion.php");

//.k. controlador depende el proceso
require_once("ctrl/".$_GET['c']."_ctrl.php");




?>

