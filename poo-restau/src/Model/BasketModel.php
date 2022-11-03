<?php
namespace App\Model;

use Core\Model\DefaultModel;

class BasketModel extends DefaultModel{
    protected string $table = 'commande';
    protected string $entity = "Commande";
    protected $pdo;

    public function __construct(){
        $this->pdo = (new Database())->getPdo();
    }

    public function getBasket(){
        $statement = "SELECT * FROM ".$this->table." WHERE id_user = 1";
        return $this->getData($statement);
        // $query = $this->pdo->query($statement, \PDO::FETCH_OBJ);
        // $items =  $query->fetchAll();
    }
}