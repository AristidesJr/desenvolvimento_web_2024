<?php


try {
    $bdCon = pg_connect("host=localhost port=5432 dbname= postgres user=postgres password=postgres");

    if($bdCon) {
        $termoBusca = $_POST['campo_primeiro_nome'];

        $result = pg_query('SELECT * 
                              FROM TBPESSOA
                             WHERE PESNOME ILIKE %' . $termoBusca . '%');


        if(pg_num_rows($result)) {
            while($row as pg_fetch_assoc($result)) {
                if($row) {
                    print_r($row);
                }
            }
        }
        else {
            echo 'Nada Encontrado';
        }
    }

}
catch(Exception $e) {
    $e->getMessage();
}