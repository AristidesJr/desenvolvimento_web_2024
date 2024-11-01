<?php

class ConexaoBd {

    private $host;
    private $porta;
    private $userName;
    private $password;
    private $dataBase;
    private $dbconn;


    public function getHost() {
        return $this->host;
    }

    public function setHost($host) {
        $this->host = $host;
        return $this;
    }

    public function getPorta() {
        return $this->porta;
    }

    public function setPorta($porta) {
        $this->porta = $porta;
        return $this;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getDataBase() {
        return $this->dataBase;
    }

    public function setDataBase($dataBase) {
        $this->dataBase = $dataBase;
        return $this;
    }

    public function conectar() {
        try {
            $this->dbconn = pg_connect($this->getConnectionString());

            if($this->dbconn) {
                return true;
            }
        }
        catch(Exception $e)  {

        }
    }

    private function getConnectionString() {
        return  "host="     . $this->getHost() .
                "port="     . $this->getPorta() .
                "dbname="   . $this->getDataBase() .
                "user="     . $this->getUserName() .
                "password=" . $this->getPassword();
    }

    public function getInternalConnection() {
        return $this->dbconn;
    }


}