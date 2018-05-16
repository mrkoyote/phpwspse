<?php
/*
la clase de bancos.
.k.
*/
class Bank extends Conectpse
{
	//los atributos
	private $clientSoap;
	private $bancos;
	private $auth;
	

	public function __construct(){
		$this->clientSoap = Conectpse::conpse();
		$this->auth = Conectpse::auth();
		$this->bancos=array();
	}

	//metodos	
	public function getBankList()
	{
		try {
				//se capturan los bancos
				print_r($this->auth);
				$result = $this->clientSoap->getBankList($this->auth);	
				$this->bancos = $result->getBankListResult->item;
			}
		catch(Exception $e) 
			{
				//mensaje de error
				echo "No se pudo obtener la lista de Entidades Financieras, por favor intente más tarde";
			}

		return $this->bancos;
	}

}




?>