<?php

namespace app\controllers;

class BaseController implements ControllerInterface
{
    public function run()
    {
        echo ('not implemented yet');
    }

    public function view($view, $data = [])
    {
        require_once(__DIR__ . '/../views/' . $view . '.php');
    }
}
