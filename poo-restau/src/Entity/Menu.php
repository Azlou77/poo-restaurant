<?php

namespace App\Entity;

class Menu{
    private int $id_menu;
    private string $name_menu;
    private int $prix_menu;

    public function getId():int{
        return $this->id_menu;
    }

    public function getName():string{
        return $this->name_menu;
    }

    public function setName(string $name):void{
        $this->name_menu = $name;
    }

    public function getPrice():int{
        return $this->prix_menu;
    }

    public function setPrice(int $price):void{
        $this->prix_menu = $price;
    }
}