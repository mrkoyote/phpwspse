<?php

//se invoca el controlador de personas
require_once('person_ctrl.php');
require_once('authentication_ctrl.php');
require_once('psetransactionrequest.php');

//informacion para procesar en la creacion
require_once('datos_persona.php');

    $lapersona=$persona->gPerson($documentType,$document,$firstName,$lastName,$company,$emailAddress, $address,$city,$province,$country,$phone,$mobile);

    $ct=array(
            'bankCode' => $_POST['banco'],
            'bankInterface' => $_POST['tipobanca'], 
            'returnURL' => $returnURL,
            'reference' => $reference,
            'description' => $description,
            'language' => $language,
            'currency' => $currency,
            'totalAmount' => $totalAmount,
            'taxAmount' => $taxAmount,
            'devolutionBase' => $devolutionBase,
            'tipAmount' => $tipAmount,
            'payer' => $lapersona,
            'buyer' => $lapersona,
            'shipping' => $lapersona,
            'ipAddress' => $ipAddress,
            'userAgent' => $userAgent,
            'additionalData' => array()
        );

    
require_once('transaction_ctrl.php');
$lt=$latransaction->createTransaction($ct);

$insertdb=$latransaction->createMysqlTransactionResult($lt->transactionID,$lt->sessionID,$lt->returnCode,$lt->trazabilityCode,$lt->transactionCycle,$lt->bankCurrency,$lt->bankFactor,$lt->bankURL,$lt->responseCode,$lt->responseReasonCode,$lt->responseReasonText);

    header("Location: ".$lt->bankURL);
?>