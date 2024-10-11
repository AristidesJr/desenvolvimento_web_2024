
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
            <legend>Feirinha</legend>
            
            <form action="atividade_7.php" method="post">

                <div class="div_calculo_juros">

                    <div class="div_juros">
                        <label  for="valor_vista">Valor a vista</label>
                        <input id="valor_vista" name="valor_vista" type="number" required value="22500">
                    </div>

                    <div class="div_juros">
                        <label  for="numero_parcela">Número de parcelas</label>
                        <input id="numero_parcela" name="numero_parcela" type="number" required value="60">
                    </div>
                
                    <div class="div_juros">
                        <label  for="valor_parcela">Valor da Parcela</label>
                        <input id="valor_parcela" name="valor_parcela" type="number" required value="489.65" >
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
if(isset($_POST['valor_vista']) && isset($_POST['numero_parcela']) && isset($_POST['valor_parcela'])) {
    include_once('funcoes.php');

    $iValorVista       = $_POST['valor_vista'];
    $QuantidadeParcela = $_POST['numero_parcela'];
    $iValorParcela     = $_POST['valor_parcela'];

    
    $sHtml  = '<fieldset>';
    $sHtml .= ' <legend>Resultado</legend>';
    $sHtml .= '     <p>O juros será: ' . calculaValorJuros($QuantidadeParcela, $iValorParcela, $iValorVista) . 'R$</p>';
    $sHtml .= '</fieldset>';

    echo $sHtml;
}
?>

