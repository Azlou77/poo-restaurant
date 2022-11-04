<?php

use App\Controller\BasketController;
use App\Controller\MenuController;
use App\Controller\ProductController;

define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

// (new BasketController)->index();
// (new BasketController)->update();

(new ProductController)->index();
// (new ProductController)->showOne();

(new MenuController)->index();
