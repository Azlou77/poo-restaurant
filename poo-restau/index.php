<?php

use App\Controller\BasketController;
use App\Controller\MenuController;
define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

(new BasketController)->index();
(new MenuController)->index();