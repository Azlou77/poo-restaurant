<?php

namespace App\Entity;

class Product{
    private string $id;
    private string $name_product;
    private int $prix_product;
    private string $description_product;
    private string $image;
    private int $id_category;

    public function __invoke(){
        $array = array();
        $methods = get_class_methods($this);

        foreach($methods as $method){
            if(str_contains($method, 'get')){
                $key = strtolower(substr($method, 3));

                if(method_exists($this, $method) && $method != 'getId'){
                    $array[$key] = $this->$method();
                }
            }

        }
        return $array;
    }
    public function getId():int{
        return $this->id;
    }

    public function getName():string{
        return $this->name_product;
    }

    public function setName(string $name):void{
        $this->name_product = $name;
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




    /**
     * Get the value of id_category
     *
     * @return int
     */
    public function getIdCategory(): int
    {
        return $this->id_category;
    }

    /**
     * Set the value of id_category
     *
     * @param int $id_category
     *
     * @return self
     */
    public function setIdCategory(int $id_category): self
    {
        $this->id_category = $id_category;

        return $this;
    }
}