<?php
//se invoca el modulo
require_once('mdlo/Gti_mdlo.php');
// se obtiene el objeto
$mostrartabla= new Tomainfotransac();
$mt=$mostrartabla->consultardb();
$maxt = sizeof($mt);

?>