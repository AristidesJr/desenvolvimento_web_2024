<?php
require_once "lib/conexaobd.php";

$conexaoBd = new ConexaoBd();
$conexaoBd->setHost('127.0.0.1');
$conexaoBd->setPorta(5432);
$conexaoBd->setUserName('postgres');
$conexaoBd->setPassword('123456');
$conexaoBd->setDataBase('postgres');

if(!$conexaoBd->conectar()) {
    echo 'Falha na conexão';
}
else {
    echo 'Conectado com sucesso';

    $query = new Query($conexaoBd);
    $query->setSql("SELECT 1 AS COLUNA");

    if($query->Open()) {
        while($linha = $query->getNextRow()) { 
            var_dump($linha);
        }
    }

}


