<?php

class Database {
    private $connection;
    private $statement = null;
    public function __construct($config, $user, $pass) {
        $dns = "mysql:" . http_build_query($config, '', ';');
        
        try {
            $this->connection = new PDO($dns, $user, $pass);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);  
       
        }
        catch (PDOException $e) {
            debug($e->getMessage());
        }
    }

    public function close() {
        $this->statement = null;
        $this->connection = null;
    }

    public function query($sql, $params = []) {
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);
    }

    public function fetch() {
        if ($this->statement) {
            return $this->statement->fetch();
        }
        
        return "error: query was not built";
    }

    public function fetchAll() {
        if ($this->statement) {
            return $this->statement->fetchAll();
        }

        return "error: query was not built";
    }
}