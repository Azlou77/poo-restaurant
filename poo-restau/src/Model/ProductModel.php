<?php
namespace App\Model;

use Core\Model\DefaultModel;

class ProductModel extends DefaultModel{

    protected string $table = 'products';
    protected string $entity = "Product";

    public function createProduct($product)
    {
        var_dump($product);
        $statement = "INSERT INTO ".$this->table." (name_product, prix_product, description_product, image) VALUES ('test', 10, 'test', 'test')";
        return $this->insertData($statement);
    }
}