# Host: localhost  (Version 5.5.5-10.0.34-MariaDB-0ubuntu0.16.04.1)
# Date: 2018-05-15 17:33:14
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "PSETransactionResponse"
#

CREATE TABLE `PSETransactionResponse` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `transactionID` int(11) NOT NULL DEFAULT '0',
  `sessionID` varchar(32) DEFAULT NULL,
  `returnCode` varchar(30) DEFAULT NULL,
  `trazabilityCode` char(40) DEFAULT NULL,
  `transactionCycle` int(11) DEFAULT NULL,
  `bankCurrency` varchar(3) DEFAULT NULL,
  `bankFactor` float DEFAULT NULL,
  `bankURL` varchar(255) DEFAULT NULL,
  `responseCode` int(11) DEFAULT NULL,
  `responseReasonCode` varchar(3) DEFAULT NULL,
  `responseReasonText` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

#
# Data for table "PSETransactionResponse"
#

INSERT INTO `PSETransactionResponse` VALUES (1,1457980977,'024496e7be15bb088d993bd7ac57ad35','SUCCESS','1424745',1,'COP',1,'https://registro.desarrollo.pse.com.co/PSEUserRegister/StartTransaction.htm?enc=V%2brHQIwzrDzFvDKfmDEJ7oRGSypy%2bM6cENQZbTOf23Ej18q%2byZfqQ5BuB4AaiSjD',3,'?-','Transacción pendiente. Por favor verificar si el débito fue realizado en el Banco.'),(2,1457981026,'db74841f611daca78ecb15453272a095','SUCCESS','1424746',1,'COP',1,'https://registro.desarrollo.pse.com.co/PSEUserRegister/StartTransaction.htm?enc=V%2brHQIwzrDzFvDKfmDEJ7oRGSypy%2bM6cENQZbTOf23HcWEuj4HyWZWjhlYhe2hyw',3,'?-','Transacción pendiente. Por favor verificar si el débito fue realizado en el Banco.'),(3,1457981080,'a7a2a57f9bfb36d809e1a0b2a2de641c','SUCCESS','1424747',1,'COP',1,'https://registro.desarrollo.pse.com.co/PSEUserRegister/StartTransaction.htm?enc=tnPcJHMKlSnmRpHM8fAbu48WShp6u70DWQIIP8ezh%2fNLQ%2bkbAtD4n8%2bWqd9Vwbi6',3,'?-','Transacción pendiente. Por favor verificar si el débito fue realizado en el Banco.'),(4,1457981081,'e105da2d3f15863a5863a67affdafa46','SUCCESS','1424748',1,'COP',1,'https://registro.desarrollo.pse.com.co/PSEUserRegister/StartTransaction.htm?enc=tnPcJHMKlSnmRpHM8fAbu48WShp6u70DWQIIP8ezh%2fNkwfdkaM2gB6c0glrHv55l',3,'?-','Transacción pendiente. Por favor verificar si el débito fue realizado en el Banco.'),(5,1457981109,'9a8bd27a9548069e6d02d8cbc738b9cc','SUCCESS','1424749',1,'COP',1,'https://registro.desarrollo.pse.com.co/PSEUserRegister/StartTransaction.htm?enc=tnPcJHMKlSnmRpHM8fAbu48WShp6u70DWQIIP8ezh%2fPAjd%2fZP6Fz0qheQim6Tal9',3,'?-','Transacción pendiente. Por favor verificar si el débito fue realizado en el Banco.'),(6,1458022141,'b3d9cffa6e183c7f7fe5684bec0072e1','SUCCESS','1425055',1,'COP',1,'https://registro.desarrollo.pse.com.co/PSEUserRegister/StartTransaction.htm?enc=tnPcJHMKlSnmRpHM8fAbu%2btBiGM6mp9oUiGyV3QtSiFR8YcBBDNnhrSI6GJMWz2h',3,'?-','Transacción pendiente. Por favor verificar si el débito fue realizado en el Banco.'),(7,1458025853,'5b0bba452558708ad99fd5da619e9e3b','SUCCESS','1425150',1,'COP',1,'https://registro.desarrollo.pse.com.co/PSEUserRegister/StartTransaction.htm?enc=tnPcJHMKlSnmRpHM8fAbuzkpM8JmOCCaOkh1cHnkZGb%2b9Mwk2hdLiwQIgjxsgVmy',3,'?-','Transacción pendiente. Por favor verificar si el débito fue realizado en el Banco.');
