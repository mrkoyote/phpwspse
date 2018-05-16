<?php
//la clase de cache .k.

class Cach
{	
	//definir atributos
	
	private $tiempocache="86400";//teimpo de vida del la clave cache
	
	//metodos
	public function crear($ncache,$dato)
	{
		return apcu_add($ncache, $dato,$this->tiempocache);		
	}

	public function validar($ncache)
	{
		return apcu_fetch($ncache);		 
	}
	
}
?>