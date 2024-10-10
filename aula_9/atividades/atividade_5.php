
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 Atividade 4</title>
</head>
<body>
    
    <fieldset>
        <legend>Área do Triângulo Retângulo</legend>

        <form action="atividade_5.php" method="post">
            <div>
                <div>
                    <label  for="altura">Altura</label>
                    <input id="altura" name="altura" type="number" required min="1">
                </div>
            </div>

            <div>
                <div>
                    <label  for="base">Base</label>
                    <input id="base" name="base" type="number" required min="1">
                </div>
            </div>
            
            <div>
                <button type="reset">Limpar</button>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </fieldset>

</body>
</html>

<?php
if(isset($_POST['altura']) && isset($_POST['base'])) {
    include_once('funcoes.php');

    $iAltura = intval($_POST['altura']);
    $iBase   = intval($_POST['base']);

    $sHtml  = '<fieldset>';
    $sHtml .= ' <legend>Resultado</legend>';
    $sHtml .= '     <p>A área do Triângulo Retângulo de Altura ' . $iAltura . 'm e Base ' .  $iBase . 'm é ' . getAreaTrianguloRetangulo($iBase, $iAltura) . 'm²</p>';
    $sHtml .= '</fieldset>';

    echo $sHtml;
}
?>

