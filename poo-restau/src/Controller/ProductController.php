<?php
namespace App\Controller;

use Core\Controller\DefaultController;
use App\Model\ProductModel;

class ProductController extends DefaultController{
    protected ProductModel $model;

    public function __construct(){
        $this->model = new ProductModel();
    }

    public function index(){
        $this->render('product/products', [
            'products' => $this->model->findAll()
        ]);
    }

    public function createProduct(){
        $this->model->createProduct(array(
            'name' => 'Product 1',
            'price' => 10.99,
            'description' => 'This is a product',
            'image' => 'product1.jpg'
        ));
    }

    function showOne(){
        $this->render('product/products', [
            'products' => $this->model->find($_GET['id'])
        ]);
    }
}