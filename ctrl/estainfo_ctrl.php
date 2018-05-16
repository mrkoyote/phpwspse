<?php
//se invoca el modulo
require_once('ctrl/gti_ctrl.php');
require_once('ctrl/transaction2_ctrl.php');
$tblestado="";

for($i=0;$i<$maxt;$i++)
	{
	 	$elidtra=$mt[$i]['transactionID'];
	 	//se consume el estado de la transaccion segun los de la db
	 	$estatran=$latransaction->getTransactionInformation($elidtra);
		$tblestado.= "<tr><td>".$estatran->transactionID."</td><td>".$estatran->transactionState."</td></tr>";
    }   

//se envia a la vista
require_once('vsta/gti_vsta.php');



?>