<?php
namespace App\Controller;

use Core\Database\Database;
use App\Model\MenuModel;

class MenuController extends Database{
    protected MenuModel $model;

    public function __construct(){
        $this->model = new MenuModel();
    }

    public function index(){
        var_dump($this->model->getMenu());
    }
}