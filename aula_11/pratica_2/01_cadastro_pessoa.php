<?php
//  require_once('../desenvolvimento_web_2024/conexao_database/conexao_pg_connect.php');

 file_exists('../desenvolvimento_web_2024/conexao_database/conexao_pg_connect.php');

 $instancia = DatabasePgConnect::getInstance();

$bdCon = pg_connect("host=localhost port=5432 dbname= postgres user=postgres password=postgres");
 
if($bdCon) {
    $aDados = [
        $_POST['campo_primeiro_nome'],
        $_POST['campo_sobrenome'],
        $_POST['campo_email'],
        $_POST['campo_password'],
        $_POST['campo_cidade'],
        $_POST['campo_estado'],
    ];

    $result = pg_query_params($bdCon, "INSERT INTO TBPESSOA
                                        (PESNOME, PESSOBRENOME, PESEMAIL, PESPASSWORD, PESCIDADE, PESESTADO)
                                       VALUES
                                        ($1, $2, $3, $4, $5, $6)",
                                       $aDados);

}