<?php

namespace app\core;

/**
 * Class Controller
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\core
 */
class Controller
{
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}
