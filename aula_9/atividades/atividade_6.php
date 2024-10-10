
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
            
            <form action="atividade_6.php" method="post">
                
                <div class="div_saldo">
                    <label for="saldo">Saldo</label>
                    <input id="saldo" name="saldo" type="number" value="50" readonly>
                </div>

                <div class="div_feirinha">
                    <div class="div_fruta">
                        <label  for="maca">Maça(kg)</label>
                        <input id="maca" name="maca" type="number" required min="1">
                    </div>

                    <div class="div_preco">
                        <label  for="maca_preco">Preço</label>
                        <input id="maca_preco" name="maca_preco" type="number" required value="4">
                    </div>
                    
                    <div class="div_fruta">
                        <label  for="melancia">Melancia(kg)</label>
                        <input id="melancia" name="melancia" type="number" required min="1">
                    </div>

                    <div class="div_preco">
                        <label  for="melancia_preco">Preço</label>
                        <input id="melancia_preco" name="melancia_preco" type="number" required value="0.5">
                    </div>
                
                    <div class="div_fruta">
                        <label  for="laranja">Laranja(kg)</label>
                        <input id="laranja" name="laranja" type="number" required min="1">
                    </div>

                    <div class="div_preco">
                        <label  for="laranja_preco">Preço</label>
                        <input id="laranja_preco" name="laranja_preco" type="number" required value="5">
                    </div>
                
                    <div class="div_fruta">
                        <label  for="repolho">Repolho(kg)</label>
                        <input id="repolho" name="repolho" type="number" required min="1">
                    </div>

                    <div class="div_preco">
                        <label  for="repolho_preco">Preço</label>
                        <input id="repolho_preco" name="repolho_preco" type="number" required value="1">
                    </div>
                
                    <div class="div_fruta">
                        <label  for="cenoura">Cenoura(kg)</label>
                        <input id="cenoura" name="cenoura" type="number" required min="1">
                    </div>

                    <div class="div_preco">
                        <label  for="cenoura_preco">Preço</label>
                        <input id="cenoura_preco" name="cenoura_preco" type="number" required value="3.5">
                    </div>
                
                    <div class="div_fruta">
                        <label  for="batatinha">Batatinha(kg)</label>
                        <input id="batatinha" name="batatinha" type="number" required min="1">
                    </div>

                    <div class="div_preco">
                        <label  for="batatinha_preco">Preço</label>
                        <input id="batatinha_preco" name="batatinha_preco" type="number" required value="4">
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
if(isset($_POST['saldo'])) {
    include_once('funcoes.php');
    
    $sValorCompra = 0;
    $iSaldo = intval($_POST['saldo']);

    if(isset($_POST['maca']) && isset($_POST['maca_preco'])) {
        $sValorCompra += floatval($_POST['maca']) * floatval($_POST['maca_preco']);
    }

    if(isset($_POST['melancia']) && isset($_POST['melancia_preco'])) {
        $sValorCompra += floatval($_POST['melancia']) * floatval($_POST['melancia_preco']);
    } 
    
    if(isset($_POST['laranja']) && isset($_POST['laranja_preco'])) {
        $sValorCompra += floatval($_POST['laranja']) * floatval($_POST['laranja_preco']);
    } 

    if(isset($_POST['repolho']) && isset($_POST['repolho_preco'])) {
        $sValorCompra += floatval($_POST['repolho']) * floatval($_POST['repolho_preco']);
    } 

    if(isset($_POST['cenoura']) && isset($_POST['cenoura_preco'])) {
        $sValorCompra += floatval($_POST['cenoura']) * floatval($_POST['cenoura_preco']);
    } 

    if(isset($_POST['batatinha']) && isset($_POST['batatinha_preco'])) {
        $sValorCompra += floatval($_POST['batatinha']) * floatval($_POST['batatinha_preco']);
    } 

    echo 'Total: ' . $sValorCompra . 'R$';
    echo '</br>';
    
    if($sValorCompra > $iSaldo) {
        echo '<p class="texto_vermelho">Saldo insuficiente, faltou ' . $sValorCompra - $iSaldo . 'R$ para a compra.</p>';
    }
    else if ($iSaldo > $sValorCompra)  {
        echo '<p class="texto_azul">Compra efetuada. Saldo disponível: ' . $iSaldo - $sValorCompra . 'R$.</p>';
    }
    else {
        echo '<p class="texto_verde">Compra efetuada, saldo esgotado.</p>';
    }
}
?>

