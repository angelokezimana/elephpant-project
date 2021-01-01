<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

/**
 * Class AuthController
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\controllers
 */
class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            $registerModel = new RegisterModel();
            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()) {

            }
        }

        $this->setLayout('auth');
        return $this->render('register');
    }
}
