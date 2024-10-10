
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 Atividade 1</title>
</head>
<body>
    
    <fieldset>
        <legend>Soma de Números</legend>

        <form action="atividade_1.php" method="post">
            <div>
                <div>
                    <label  for="numero_1">Número 1</label>
                    <input id="numero_1" name="numero_1" type="number" required maxlength="100" >
                </div>
                
                <div>
                    <label for="numero_2">Número 2</label>
                    <input id="numero_2" name="numero_2" type="number" required maxlength="100">
                </div>
                
                <div>
                    <label for="numero_3">Número 3</label>
                    <input type="numero_3" name="numero_3" id="campo_email" required>
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
    if(isset($_POST['numero_1']) && isset($_POST['numero_2']) && isset($_POST['numero_3'])) {
        $iNumero1 = intval($_POST['numero_1']);
        $iNumero2 = intval($_POST['numero_2']);
        $iNumero3 = intval($_POST['numero_3']);
        $sCor     = '';
    
        $iSoma = array_sum([$iNumero1, $iNumero2, $iNumero3]);
    
        if($iNumero1 > 10) {
            $sCor = 'color: #0840F5;';
        }
        else if($iNumero2 < $iNumero3) {
            $sCor = 'color: #39CC4A;';
        }
        else if($iNumero3 < $iNumero1) {
            $sCor = 'color: #CC2222;';
        }
        
        $sTagP = $sCor ? '<p style="font-size: 20px; '. $sCor .'">' : '<p>';
        
        echo '<fieldset>
                <legend>Resultado</legend>' .
                $sTagP .'A soma é: ' . $iSoma . '</p>
            </fieldset>';
    }
?>

