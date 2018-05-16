<?php

//se invoca el mdlo
require_once('mdlo/Cach_mdlo.php');

//define varible de cache para los bancos
$ncache="lstban";//cache para el banco

//obtengo el obj
$kch = new Cach();
$cachevalidar=$kch->validar($ncache);

?>