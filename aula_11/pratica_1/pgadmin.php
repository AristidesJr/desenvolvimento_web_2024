<?php

require_once();

try {
    $dbConnect = pg_connect("host=localhost port=5432 dbname= postgres user=postgres password=postgres");

    if($dbConnect) {
        echo "Conectado ao banco! :D";

        $result = pg_query($dbConnect, "SELECT  COUNT(*) AS QTDTABS FROM players");

        while($row = pg_fetch_assoc($result)) {
            echo '</b>Result:' . $row['qtdtabs'];
        }
    }
}
catch (Exception $e) {
    echo $e->getMessage();
}