<?php
//se invoca el modelo
require_once('mdlo/Transaction_mdlo.php');
$latransaction= new Transaction();
$estatran=$latransaction->getTransactionInformation($elidtra);

?>