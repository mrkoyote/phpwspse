<?php
	
	//se define los valores 
    $returnURL="http://127.0.0.1/banco.php";
    $reference="ref 0001";  
    $description="pago de prueba";
    $language="ES";
    $currency="COP";
    $totalAmount=10.000;
    $tipAmount=0;
    $taxAmount=0.19;
    $devolutionBase=0.5;
    $tipAmount=0;
    //se suman las propinas
    $totalAmount=$totalAmount+$tipAmount;   
    $ipAddress='181.137.201.192';
    $userAgent='CHROME';

?>