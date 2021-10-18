<?php

//Making a SOAP request. Some symbols: // AAPL, INTC, MSFT, CSCO, EBAY, YHOO, GOOG 

@ $CurrencyFrom = $_POST['CurrencyFrom'];
@ $CurrencyTo = $_POST['CurrencyTo'];
@ $cantidad = $_POST['cantidad'];

$CurrencyTo = trim($CurrencyTo);
$CurrencyFrom = trim($CurrencyFrom);
$cantidad = trim($cantidad);

if(!$CurrencyFrom || !$CurrencyTo || !$cantidad){
    echo 'Faltan los obligatorios';
}

$fecha_array = getdate();
$rateDate = $fecha_array['year']."-".$fecha_array['mon']."-".$fecha_array['mday'];



$params = array('CurrencyFrom' => $CurrencyFrom, 
                'CurrencyTo' => $CurrencyTo,
                'RateDate' => $rateDate);


$wsdl = "http://currencyconverter.kowabunga.net/converter.asmx?WSDL"; // the wsdl 

$soapclient = new SoapClient($wsdl); 
$resultado = $soapclient->GetConversionRate($param); 

//Imprimo por partes según el XML 
$result = $resultado->GetConversionRateResult; //resultado es un objeto: quiero el atributo result

$result = doubleval($cantidad) * $result; //cantidad total

echo $result;

?>