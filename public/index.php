<?php

use app\controllers\PageController;
use app\core\Application;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');

$app->router->get('/About', 'about');

$app->router->get('/contact', 'contact');

$app->router->post('/contact', [PageController::class, 'saveContact']);

$app->run();
