<?php

$iSalarioUm = 1000;
$iSalarioDois = 2000;

// $iSalarioDois = $iSalarioUm;
// $iSalarioDois ++;

// $iSalarioUm = $iSalarioUm * 1.1;

// echo "Valor salário Um" . $iSalarioUm;
// echo '</br>';
// echo "Valor salário Dois" . $iSalarioDois;

// echo '<hr>';

if($iSalarioUm > $iSalarioDois) {
    echo "O valor do salário 1 é maior!";
} 
else if($iSalarioDois > $iSalarioUm){
    echo "Valor salário Dois é maior!";
} 
else {
    echo 'os valores são iguais';
}

echo '<br>';

for($i=1; $i <= 100; $i++) { 
    $iSalarioUm++;

    if($i === 50) {
        break;
    }
}

if($iSalarioUm < $iSalarioDois) {
    echo 'o valor do salário um é ' . $iSalarioUm;
}