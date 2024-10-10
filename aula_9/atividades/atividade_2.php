
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 Atividade 2</title>
</head>
<body>
    
    <fieldset>
        <legend>Valida Divisibilidade por 2</legend>

        <form action="atividade_2.php" method="post">
            <div>
                <div>
                    <label  for="numero_1">Número</label>
                    <input id="numero_1" name="numero_1" type="number" required maxlength="100" required min="1" >
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
if(isset($_POST['numero_1'])) {
    include_once('funcoes.php');
    
    $iNumero = intval($_POST['numero_1']);

    $sHtml  = '<fieldset>';
    $sHtml .= ' <legend>Resultado</legend>';

    if(isDivisivelPor(2, $iNumero) == 0) {
        $sHtml .= '<p>Valor divisível por 2</p>';
    }
    else {
        $sHtml .= '<p>O valor não é divisível por 2</p>';
    }

    $sHtml .= '</fieldset>';

    echo $sHtml;
}

?>