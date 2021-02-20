<?php

function ajuste($result, $arrayDiverso, $str, $copiaResult) {
    
    $copiaResult = $result;
    $chave = [];
    
    foreach($arrayDiverso as $item){
        array_push($chave,array_search($item, $result));
    }

    foreach($chave as $key) {
        $copiaResult[$key] = $str;
    }

    return $copiaResult;
}