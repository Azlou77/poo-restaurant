<?php
namespace App\Model;

use App\Entity\Product;
use Core\Model\DefaultModel;

class ProductModel extends DefaultModel{

    protected string $table = 'products';
    protected string $entity = "Product";

    public function createProduct(Product $product)
    {
        $statement = "INSERT INTO ".$this->table." (name_product, prix_product, description_product,id_category, image)
                     VALUES (:name, :price, :description, :idcategory, :image)";

        $query = $this->pdo->prepare($statement);
        $query->execute($product());
    }

    // public function createProduct($product){
    //     $stmt = "INSERT INTO {$this->table} (name) VALUES (:name)";
    //     $prepare = $this->pdo->prepare($stmt);
    //     $prepare->execute($category());

    // }
}