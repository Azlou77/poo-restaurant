<?php
namespace App\Controller;

use Core\Controller\DefaultController;
use App\Model\MenuModel;

class MenuController extends DefaultController{
    protected MenuModel $model;
    

    public function __construct(){
        $this->model = new MenuModel();
    }

    public function index(){
        $this->render('Menu/index', [
            'menus' => $this->model->findAll()
        ]);
    }
}