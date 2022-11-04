<?php

namespace App\Entity;

class Product{
    private string $id;
    private string $name_product;
    private int $prix_product;
    private string $description_product;
    private string $image;

    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name_product;
    }

    public function setName(string $name):void{
        $this->product_id = $name;
    }


    public function getPrice():int{
        return $this->prix_product;
    }

    public function setPrice(int $price):void{
        $this->prix_product = $price;
    }

    public function getDescription():string{
        return $this->description_product;
    }

    public function setDescription(string $description):void{
        $this->description_product = $description;
    }

    public function getImage():string{
        return $this->image;
    }

    public function setImage(string $image):void{
        $this->image = $image;
    }



}