<?php

use App\Controller\BasketController;
use App\Controller\MenuController;
use App\Controller\ProductController;
use Core\Routeur\Routeur;

define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

(new Routeur)->Router();
