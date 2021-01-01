<?php

use app\controllers\AuthController;
use app\controllers\PageController;
use app\core\Application;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/', [PageController::class, 'home']);

$app->router->get('/About', [PageController::class, 'about']);

$app->router->get('/contact', [PageController::class, 'contact']);

$app->router->post('/contact', [PageController::class, 'saveContact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();
