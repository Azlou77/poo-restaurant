<?php
namespace App\Model;

use Core\Model\DefaultModel;

class BasketModel extends DefaultModel{
    protected string $table = 'commande';
    protected string $entity = "Commande";
    protected $pdo;


    public function getBasket(){
        $statement = "SELECT * FROM ".$this->table." WHERE id_user = 1";
        return $this->getData($statement);
    }
}