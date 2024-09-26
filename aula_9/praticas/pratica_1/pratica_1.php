<?php

$salarioBruto = 0;
$imposto = 0;
$liquido = 0;

function calculaFolhaPagamento(&$bruto, &$imposto, &$liquido) {

    $bruto = 10000;
    $imposto = 1000;
    $liquido = $bruto - $imposto;;
}

calculaFolhaPagamento($salarioBruto, $imposto, $liquido);
Echo "Bruto: " . $salarioBruto . " Imposto: " . $imposto . "Líquido: " . $liquido;





