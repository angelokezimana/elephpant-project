<?php

use app\core\Application;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Application();

$app->router->get('/', function(){
    return "Hello World";
});

$app->router->get('/About', function(){
    return "This is my first framework. Enjoy!";
});

$app->run();
