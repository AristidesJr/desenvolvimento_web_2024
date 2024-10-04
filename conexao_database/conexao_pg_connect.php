<?php

class DatabasePgConnect {

    public static $instance;

    private function __construct() {}


    public static function getInstance() {
        if(!isset(self::$instance))  {
            self::$instance = pg_connect("host=localhost port=5432 dbname= postgres user=postgres password=postgres");
        }

        return self::$instance;
    }

    public static function query(string $sql) {
        return pg_query($sql);
    }


}

?>