<?php

function imprimir($array, $str) {
    echo "\n".$str."\n";
    foreach($array as $item) {
        echo "<br>";   
        echo "\n".$item;
        
    }
}