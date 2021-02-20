<?php

include_once('service/multiplos.php');
include_once('service/imprimir.php');
include_once('service/ajuste.php');

$result       = [];
$copiaResult  = [];
$resultArray5 = [];
$resultArray3 = [];
$resultIguais = [];
$valueDefault = 100;

for($i=1; $i<=$valueDefault; $i++) {
    array_push($result, $i);
}
$resultArray3 = multiplosGlobal($result, 3);
$resultArray5 = multiplosGlobal($result, 5);

$resultIguais = array_intersect($resultArray3, $resultArray5);

$resultArray3 = array_diff($resultArray3, $resultIguais);
$resultArray5 = array_diff($resultArray5, $resultIguais);

echo "\n_______________________DESAFIO_____________________\n";

$resultArray5 = ajuste($result, $resultArray5, 'TI', $copiaResult);
$resultArray3 = ajuste($resultArray5, $resultArray3, 'StarCorp', $copiaResult);
$finalDesafio = ajuste($resultArray3, $resultIguais, 'StarCorpianos', $copiaResult);

imprimir($finalDesafio, 'LISTA');