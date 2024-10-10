
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 Atividade 4</title>
</head>
<body>
    
    <fieldset>
        <legend>Área do Retângulo</legend>

        <form action="atividade_4.php" method="post">
            <div>
                <div>
                    <label  for="altura">Altura</label>
                    <input id="altura" name="altura" type="number" required min="1">
                </div>
            </div>

            <div>
                <div>
                    <label  for="largura">Largura</label>
                    <input id="largura" name="largura" type="number" required min="1">
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
if(isset($_POST['altura']) && isset($_POST['largura'])) {
    include_once('funcoes.php');

    $iAltura  = intval($_POST['altura']);
    $iLargura = intval($_POST['largura']);

    $sHtml  = '<fieldset>';
    $sHtml .= ' <legend>Resultado</legend>';
    $sHtml .= '     <p>A área do retângulo de lados ' . $iAltura . 'm e ' .  $iLargura . 'm é ' . getAreaQuadrado($iLargura, $iAltura). 'm²</p>';
    $sHtml .= '</fieldset>';

    echo $sHtml;
}



?>

