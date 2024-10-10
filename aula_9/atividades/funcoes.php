<?php


function getAreaQuadrado(float $iLado, float $iAltura) {
   return  $iLado * $iAltura;
}

function getAreaTrianguloRetangulo(float $iBase, float $iAltura) {
   return  ($iBase * $iAltura)/2;
}

function isDivisivelPor(int $iDivisor, int $iDividendo) {
    $iResto = $iDividendo % $iDivisor;

    return $iResto == 0;
}


?>