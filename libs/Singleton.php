<?php

namespace Core;

use PDO;

class Singleton {
    private static $instance;

    public function __construct(protected PDO $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD)) {
    }

    public static function getInstance()
     {
        if (!self::$instance) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function getConnection() 
    {
        return $this->connection;
    }
}





