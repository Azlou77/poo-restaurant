<?php
namespace Core\Model;

use Core\Database\Database;

class DefaultModel extends Database{
    protected string $table; 
    protected string $entity;


    public function findAll():array{
        $statement = "SELECT * FROM ".$this->table."";
        return $this->getData($statement);
    }

    public function find(int $id):object{
        $statement = "SELECT * FROM ".$this->table." WHERE id=$id";
        return $this->getData($statement, true);
    }
}