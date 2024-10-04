<?php

try {
    $dbConnect = pg_connect("host=localhost port=5432 dbname= postgres user=postgres password=postgres");

    if($dbConnect) {

        $result = pg_query($dbConnect, "SELECT * FROM TBPESSOA");

        while($row = pg_fetch_assoc($result)) {
            echo print_r($row);
            echo '<hr>';
        }
    }
}
catch (Exception $e) {
    echo $e->getMessage();
}