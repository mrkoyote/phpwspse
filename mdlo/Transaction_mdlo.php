<?php
/*
la clase de transaccion.
.k.
*/
class Transaction extends Conectpse
{

	private $clientSoap;
	private $auth;
	private $cretra;
	private $getinfo;
	private $db;

	public function __construct(){
		$this->clientSoap = Conectpse::conpse();
		$this->auth = Conectpse::auth();
		$this->db = Conectpse::conmysql();
		$this->cretra=array();
		$this->getinfo=array();
	}

	//metodos
	
	public function createTransaction($ct)
	{
		try {
				//secrea transaccion
				$parametros=$this->auth;
    			$parametros['transaction'] = $ct;
				$result = $this->clientSoap->createTransaction($parametros);
				$this->cretra = $result->createTransactionResult;
				
			}
		catch(Exception $e) 
			{
				die($e->getMessage());
			}

		return $this->cretra;
	}

	public function createMysqlTransactionResult($transactionID,$sessionID,$returnCode,$trazabilityCode,$transactionCycle,$bankCurrency,$bankFactor,$bankURL,$responseCode,$responseReasonCode,$responseReasonText)
	{
		//instertar datos despuues del retorno de informacion
		$insertar="INSERT INTO PSETransactionResponse(transactionID,sessionID,returnCode,trazabilityCode,transactionCycle,bankCurrency,bankFactor,bankURL,responseCode,responseReasonCode,responseReasonText) VALUES($transactionID,'".$sessionID."','".$returnCode."','".$trazabilityCode."',$transactionCycle,'".$bankCurrency."',$bankFactor,'".$bankURL."','".$responseCode."','".$responseReasonCode."','".$responseReasonText."')";

		if ($this->db->query($insertar) === TRUE) {
		    echo "INSERTADA INFORMACION";
		} else {
		    echo "Error: en mysql<br>" . $this->db->error;
		}

	}

	public function createTransactionMultiCredit($ct,$cc)
	{
		try {
				//secrea transaccion
				$parametros=$this->auth;
    			$parametros['transaction'] = $ct;
				$result = $this->clientSoap->createTransactionMultiCredit($parametros);
				$this->cretra = $result->$transaction = $esult->createTransactionMultiCreditResult;

			}
		catch(Exception $e) 
			{
				die($e->getMessage());
			}

		return $this->cretra;
	}
	public function getTransactionInformation($transactionID)
	{
		try {
				//secrea transaccion
				$parametros=$this->auth;
    			$parametros['transactionID'] = $transactionID;
				$result = $this->clientSoap->getTransactionInformation($parametros);
				$this->getinfo = $result->getTransactionInformationResult;
				
			}
		catch(Exception $e) 
			{
				die($e->getMessage());
			}

		return $this->getinfo;
	}

}
?>