
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Aula 9 Atividade 6</title>
</head>
<body>
    <div class="div_grid">
        <fieldset>
            <legend>Cálculo Valor Parcela</legend>
            
            <form action="atividade_8.php" method="post">

                <div class="div_calculo_parcela">

                    <div class="div_juros">
                        <label  for="valor_vista">Valor a vista</label>
                        <input id="valor_vista" name="valor_vista" type="number" required value="8654">
                    </div>

                    <div class="div_juros">
                        <label  for="numero_parcela">Número de parcelas</label>
                        <select name="numero_parcela" id="numero_parcela">
                            <option value="24">24 vezes</option>
                            <option value="36">36 Vezes</option>
                            <option value="48">48 Vezes</option>
                            <option value="60">60 Vezes</option>
                        </select>
                    </div>

                </div>
            
                <div>
                    <button type="reset">Limpar</button>
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </fieldset>
    </div>

</body>
</html>

<?php
if(isset($_POST['valor_vista']) && isset($_POST['numero_parcela']) ) {
    include_once('funcoes.php');

    $iValorVista        = floatval($_POST['valor_vista']);
    $iQuantidadeParcela = intval($_POST['numero_parcela']);
    
    $sHtml  = '<fieldset>';
    $sHtml .= ' <legend>Resultado</legend>';
    $sHtml .= '     <p>Em ' . $iQuantidadeParcela . ' parcelas o valor de cada parcela será: ' . calculaValorParcelasJurosSimples($iQuantidadeParcela, $iValorVista) . 'R$</p>';
    $sHtml .= '</fieldset>';

    echo $sHtml;
}
?>

