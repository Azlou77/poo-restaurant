<?php
namespace App\Model;

use Core\Model\DefaultModel;

class MenuModel extends DefaultModel{
    protected string $table = 'menu';
    protected string $entity = "Menu";

    public function getMenu(){
        $statement = "SELECT * FROM ".$this->table."";
        return $this->getData($statement);
    }
}