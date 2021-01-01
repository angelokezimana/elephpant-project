<?php

namespace app\controllers;

use app\core\Application;

/**
 * Class PageController
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\controllers
 */
class PageController
{
    public function home()
    {
        return Application::$app->router->renderView('home', [
            'name' => 'Best man Angelo'
        ]);
    }

    public function about()
    {
        return Application::$app->router->renderView('about');
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function saveContact()
    {
        return 'Contact saved!';
    }
}
