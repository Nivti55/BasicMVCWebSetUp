<?php

namespace app\controllers;

class IndexController extends BaseController
{

    public function run()
    {
        $this->view('StartView', ['name' => 'IndexPage']);
    }
}
