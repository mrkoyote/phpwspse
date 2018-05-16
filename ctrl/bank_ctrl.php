<?php 
//se invoca el modulo
require_once('mdlo/Bank_mdlo.php');
		
		// se valida la cache
		if ($cachevalidar==FALSE)
		{
			$listabancos = new Bank();
			$bancos = $listabancos->getBankList();
			$max = sizeof($bancos);
			$kch->crear($ncache,$bancos);
		}
		else
		{
			$bancos=$cachevalidar;
			$max = sizeof($bancos);
		}	


?>