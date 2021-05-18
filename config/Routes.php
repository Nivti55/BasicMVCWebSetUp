<?php

use app\controllers\IndexController;
use app\controllers\LoginController;
use app\controllers\ErrorController;

return $routes = [
    'Index' => new IndexController(),
    'Login' => new LoginController(),
    'Error' => new ErrorController()
];

