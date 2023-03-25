<?php

namespace Core;

use PDO;

abstract class Model
{
    abstract function getClassName(): string;

    abstract function getTableName(): string;
    
    public function findAll(): array
    {
        $table = $this->getTableName();
        $class = $this->getClassName();

        $instance = Singelton::getInstance();
        $connection =$instance->getConnection();

        $statement = $this->connection->query("SELECT * FROM $table");
        $statement->setFetchMode(PDO::FETCH_CLASS, $class);

        $rows = [];
        while ($row = $statement->fetch()) {
            $rows[] = $row;
        }

        return $rows;
    }
}