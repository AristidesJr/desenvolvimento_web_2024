<?php

define('NOTAS', [10, 9, 8, 7, 6, 10, 9, 8, 7, 6]);
define('FALTAS', [
    'segunda' => 0,
    'terca'   => 1,
    'quarta'  => 0,
    'quinta'  => 0,
    'sexta'   => 1
]);


function calcularMedia(array $notas) {
    return array_sum($notas) / count($notas);
}

function verificaAprovacao(int $media) {
    if($media >= 7) {
        return 'Aprovado';
    }

    return 'Reprovado';
}

function calcularFrequencia(array $frequencia) {
    $falta = array_filter($frequencia, function($valor) {
        return $valor == 0;
    });

    return  count($falta) * 100 / count($frequencia);
}

function varificaAprovacaoFrequencia(int $frequencia) {
    if($frequencia > 70) {
        return 'Aprovado';
    }

    return 'Reprovada';
}