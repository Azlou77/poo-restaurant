<?php

use App\Controller\BasketController;
define("ROOT", __DIR__);
require ROOT. "/vendor/autoload.php";

(new BasketController)->index();