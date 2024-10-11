
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Aula 9 Atividade 10</title>
</head>
<body>
    <div class="div_grid">
        <fieldset>
            <legend>Árvore Recursiva</legend>

            <?php
                include_once('funcoes.php');

                $aPastas = [
                    'bsn' =>  [
                        '3a Fase' => [
                            'desenvWeb',
                            'bancoDados',
                            'engSoft 1'
                        ],
                        '4a Fase' => [
                            'Intro Web',
                            'bancoDados 2',
                            'engSoft 2'
                        ]
                    ]
                ];

                escreveArrayRecursivamente($aPastas);
            ?>

        </fieldset>
    </div>

</body>
</html>



