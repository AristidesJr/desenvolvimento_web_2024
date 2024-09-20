<?php


    $aDisciplina = [
        'Programação Web I',
        'Administração de Sistemas de Informação',
        'Gerência de Projetos',
        'Redes de Computadores',
        'Linguagem de Programação e Paradigmas'
    ];

    $aProfessor = [
        'Cleber Nardelli',
        'Sandro Alencar Fernandes',
        'Jullian Hermann Creutzberg',
        'Fabiano Gabardo Lemos',
        'Ademar Perfoll Junior'
    ];


    // foreach($aDisciplina as $ikey => $sDisciplina) {
    //     echo "Disciplina: $sDisciplina Professor: $aProfessor[$ikey]";
    //     echo '<br>';
    // }


    $aDiscProf = [
        'Programação Web I'                       => 'Cleber Nardelli',
        'Administração de Sistemas de Informação' => 'Sandro Alencar Fernandes',
        'Gerência de Projetos'                    => 'Jullian Hermann Creutzberg',
        'Redes de Computadores'                   => 'Fabiano Gabardo Lemos',
        'Linguagem de Programação e Paradigmas'   => 'Ademar Perfoll Junior',
    ];

    // foreach($aDiscProf as $sDisciplina => $sProfessor) {
    //     echo "Disciplina: $sDisciplina || Professor: $sProfessor";
    //     echo '<br>';
    // }

    array_map(function($valor) {
        // echo "Disciplina: $key || Professor: $valor";
        echo '<br>';
        echo $valor;
    }  ,$aDiscProf, array_keys($aDiscProf));