<?php

namespace Core\Routeur;
use App\Controller\MenuController;
use App\Controller\ProductController;
use App\Controller\BasketController;

class Routeur{
    public function Router(){   
        if(isset($_GET['page']) && !empty($_GET['page'])){
            switch($_GET['page']){
                case 'menu':
                    (new MenuController)->index();
                    break;
                case 'product':
                    (new ProductController)->index();
                    break;
                case 'product_show':
                    (new ProductController)->showOne();
                    break;
                case 'product_add':
                    (new ProductController)->createProduct();
                    break;
                case 'basket':
                    (new BasketController)->index();
                    break;
                default:
                    echo "Page not found";
            }
        }
    }
}