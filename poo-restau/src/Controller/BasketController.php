<?php
namespace App\Controller;
use Core\Database\Database;
use App\Model\BasketModel;

class BasketController extends Database{
    protected BasketModel $model;

    public function __construct(){
        $this->model = new BasketModel();
    }

    public function index(){
        var_dump($this->model->getBasket());
    }
    public function update(){
        $this->model->updateBasketItems(array(1, 8, 5));
    }

}
