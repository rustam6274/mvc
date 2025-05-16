<?php
use app\controllers\HomeController;
use core\route\Dispatcher;
require_once "../vendor/autoload.php";
require_once "../route/web.php";
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

//$s = new HomeController('sss');
//echo $s->index();

$requestMethod = $_SERVER['REQUEST_METHOD'];
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$s = new Dispatcher($requestMethod, $requestUri);
$s->dispatch();
