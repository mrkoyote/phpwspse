<?php
//la clase de get transa .k.

class Tomainfotransac extends Conectpse
{	
	//atributo
	private $gti;
	private $db;
	//el constructor
	
	public function __construct(){
		$this->db = Conectpse::conmysql();
		$this->gti= array();
	}

	//metodos

	//consulta la db los reg de las transacciones para validar su estado.
	public function consultardb()
	{
		$consulta="SELECT Id,transactionID FROM PSETransactionResponse";
		$query = $this->db->query($consulta);
		while ($rows = $query->fetch_assoc()){
			$this->gti[] = $rows;
		}
		return $this->gti;
	}

}
?>