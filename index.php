<?php

declare(strict_types=1);

require "vendor/autoload.php";

require_once('./config/Router.php');

$routes = require_once('./config/Routes.php');


Router::start($routes);

