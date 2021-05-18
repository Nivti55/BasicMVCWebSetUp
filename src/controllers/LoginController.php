<?php

namespace app\controllers;

class LoginController extends BaseController
{

    public function run()
    {
        $this->view('LoginView', ['name' => 'LoginPage']);
    }
}
