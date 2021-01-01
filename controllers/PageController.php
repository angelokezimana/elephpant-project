<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Class PageController
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\controllers
 */
class PageController extends Controller
{
    public function home()
    {
        return $this->render('home', [
            'name' => 'Best man Angelo'
        ]);
    }

    public function about()
    {
        return $this->render('about');
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function saveContact(Request $request)
    {
        var_dump($request->getBody());
    }
}
