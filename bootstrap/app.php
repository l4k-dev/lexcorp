<?php

define('BASE_PATH', dirname(__DIR__));

use App\Core\App;
use App\Core\Router;

$router = new Router();

require BASE_PATH . '/routes/web.php';

return new App($router);