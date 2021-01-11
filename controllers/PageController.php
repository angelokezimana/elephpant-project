<?php

namespace app\controllers;

use app\core\Request;
use app\core\Controller;
use app\core\Application;
use app\core\Response;
use app\models\ContactForm;

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
            'name' => 'Elephpant Project'
        ]);
    }

    public function about()
    {
        return $this->render('about');
    }

    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->getBody());

            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us. We gonna give you an answer very soon.');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', ['model' => $contact]);
    }
}
