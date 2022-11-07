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

    public function updateBasket($id){
        $statement = "UPDATE ".$this->table." SET status = 'Livraison' WHERE id_commande = $id";
        return $this->updateData($statement);
    }

    public function updateBasketItems($items){                
        $items = json_encode($items);
        $statement = "UPDATE ".$this->table." SET items_id = '$items' WHERE id_user = 1";
        return $this->updateData($statement);
    }
}