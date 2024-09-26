<?php

// $aValores = [
//     'Disciplinas' => ['Matemática', 'Português', 'Geografia', 'Educação Física'],
//     'Faltas'      => [5, 2, 10, 2],
//     'Média'       => [8.5, 9, 6, 8]
//  ]


 $aDiario = [
    'titulos'     => ['Disciplinas', 'Faltas', 'Média'],
    'matematica'  => ['Matemática', 5, 8.2],
    'portugues'  => ['Português', 2, 9],
    'geografia'  => ['Geografia', 10, 6],
    'educacao_fisica'  => ['Educação Física', 2, 8],
 ];


$sHtmlTabela = '<div>';
$sHtmlTabela .= '<table>';

foreach($aDiario as $key => $aValor) {
    $sHtmlTabela .= '<tr>';

    foreach ($aValor as $value) {
        if($key === 'titulos') {
            $sHtmlTabela .= '<th> ';
            $sHtmlTabela .= $value;
            $sHtmlTabela .= '</th> ';
        }
        else {
            $sHtmlTabela .= '<td> ';
            $sHtmlTabela .= $value;
            $sHtmlTabela .= '</td> ';
        }
    }
    
    $sHtmlTabela .= '</tr>';
}

$sHtmlTabela .= '<table>';
$sHtmlTabela .= '<div>';

echo $sHtmlTabela;