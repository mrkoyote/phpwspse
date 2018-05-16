<?php 

//.k. conexion pse
	class Conectpse 
	{		
		//se cargan las variables de configuracion		
		/////////////////////////////////////////////////////////
		private $l ='6dd490faf9cb87a9862245da41170ff2';			
		private $codifica = 'UTF-8';
		private $tranKey;
		private $tk="024h1IlD";
		private $url = "https://test.placetopay.com/soap/pse/?wsdl";
		
		//datos conexion mysql
		private $host="localhost";
		private $usr="koyote";
		private $clv="1q2w3e4r";
		private $bd="phpwspse";
		//////////////////////////////////////////////////////7
		
		//metodos

		//autenticacion del usuario
		public function auth()
			{	
				 $s=date('c');
				 $this->tk=sha1($s . $this->tk,false);
				 $a= array();
				 $a['login']=$this->l;
		 		 $a['tranKey']=$this->tk;
		 		 $a['seed']=$s;
		 		 $a['additional']=array();
		 		 return array('auth' => $a);
		 	
			}
		//conexion con el cliente soap	
		public function conpse()
		{		
			try {
					$client = new SoapClient($this->url, array('encoding' =>$this->codifica)); 
					$client->__setLocation($this->url);
					return $client;
				}
				catch(Exception $e) 
				{
					die($e->getMessage());
				}
		}
		//conexion con servidor mysql
		public function conmysql()
			{	
				$cnx = new mysqli($this->host, $this->usr, $this->clv, $this->bd);
				return $cnx;
		 	
			}



	}
?>
