<?php

declare(strict_types=1);

use app\controllers\ControllerInterface;
class Router
{
    public static ControllerInterface $controller;

    public static $routes;

    public static function getController(): ControllerInterface {

        $path =  $_GET['url'];

        if (array_key_exists($path, self::$routes)) {
          return self::$routes[$path];
        }

        return self::$routes['Error'];
    }

    public static function start(array $routes){
       self::$routes = $routes;
       self::$controller = self::getController();

       self::$controller->run();
    }

}