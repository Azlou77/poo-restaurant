<?php
namespace App\Controller;

use Core\Controller\DefaultController;
use App\Model\ProductModel;
use App\Entity\Product;

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
        if(isset($_POST['name_product']) && isset($_POST['prix_product']) && isset($_POST['description_product']) && isset($_POST['product_image'])){
            $product = new Product();
            \
            $product->setName(htmlspecialchars($_POST['name_product']))
                    ->setPrice(htmlspecialchars($_POST['prix_product']))
                    ->setDescription(htmlspecialchars($_POST['description_product']))
                    ->setImage(htmlspecialchars($_POST['product_image']))
                    ->setIdCategory(htmlspecialchars($_POST['product_category']));

            $this->model->createProduct($product);
        }
        $this->render('product/add');
    }

    function showOne(){
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $this->render('product/show', [
                'product' => $this->model->find($_GET['id'])
            ]);
        }
    }
}