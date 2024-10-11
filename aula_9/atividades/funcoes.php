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

function calculaValorJuros($iQuantidadeParcela, $iValorParcela, $iValorVista) {
   return $iQuantidadeParcela * $iValorParcela - $iValorVista;
}

function calculaValorParcelasJurosSimples($iNumeroParcela,  $iValorTotal) {
   $fJuros =  $iValorTotal * (getJurosSimplesFromNumeroParcelas($iNumeroParcela) / 100) * $iNumeroParcela;

   return ($fJuros + $iValorTotal) / $iNumeroParcela;
}

function getJurosSimplesFromNumeroParcelas($iNumeroParcela) {
   switch ($iNumeroParcela) {
      case 24:
         return 1.5;
         break;
      case 36:
         return 2.0;
         break;
      case 48:   
         return 2.5;
         break;
      case 60:   
         return 3.0;
         break;
   }
}

function calculaValorParcelasJurosComposto($iNumeroParcela,  $iValorTotal) {
   $iMontante =  $iValorTotal * pow((1 + getJurosCompostoFromNumeroParcelas($iNumeroParcela) / 100), $iNumeroParcela);

   return $iMontante / $iNumeroParcela;
}

function getJurosCompostoFromNumeroParcelas($iNumeroParcela) {
   switch ($iNumeroParcela) {
      case 24:
         return 2.0;
         break;
      case 36:
         return 2.3;
         break;
      case 48:   
         return 2.6;
         break;
      case 60:   
         return 2.9;
         break;
   }
}

function escreveArrayRecursivamente(array $aArvore, $sNivel = '-') {
   foreach ($aArvore as $key => $value) {
      if(is_array($value)) {
         echo '<p>' . $sNivel . $key . '</p>' . PHP_EOL;
         escreveArrayRecursivamente($value, $sNivel . '-');
      }
      else {
         echo '<p>' . $sNivel . $value . '</p>' . PHP_EOL ;
      }

   }
}


?>