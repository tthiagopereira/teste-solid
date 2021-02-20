<?php

function multiplosGlobal($result, $multiplo) {

    $multiplos = array_filter($result, function ($item) use($multiplo) {
        return $item % $multiplo === 0 ;
    });

    return $multiplos;
}