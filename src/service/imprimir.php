<?php

function imprimir($array, $str) {
    echo "<br>";   
    echo "\n".$str."\n";
    foreach($array as $item) {
        echo "<br>";   
        echo "\n".$item;
        
    }
}