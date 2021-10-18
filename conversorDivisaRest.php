<?php
// Using file_get_contents()
$base = 'http://currencyconverter.kowabunga.net/converter.asmx/GetConversionRate';

@ $CurrencyFrom = $_POST['CurrencyFrom'];
@ $CurrencyTo = $_POST['CurrencyTo'];
@ $cantidad = $_POST['cantidad'];

$CurrencyTo = trim($CurrencyTo);
$CurrencyFrom = trim($CurrencyFrom);
$cantidad = trim($cantidad);


if(!$CurrencyFrom || !$CurrencyTo || !$cantidad){
    echo 'Faltan los obligatorios';
    exit;
}

$fecha_array = getdate();
$rateDate = $fecha_array['year']."-".$fecha_array['mon']."-".$fecha_array['mday'];

$params = array('CurrencyFrom' => $CurrencyFrom,  //lo naranja lo vemos en el wsdl, lo otro es mi variable
                'CurrencyTo' => $CurrencyTo,      
                'RateDate' => $rateDate);         //no sabemos por qué no funciona

$url = $base.'?'.http_build_query($params); // La ? sirve para pasar los parámetros

$response = file_get_contents($url);        //También se podría hacer con CURL

$cantidad = doubleval($cantidad) * $response; //cantidad total

echo $cantidad;

?>