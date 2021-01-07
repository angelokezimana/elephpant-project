<?php

namespace app\core;

/**
 * Class Application
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\core
 */
class Application
{
    public static string $ROOT_DIR;
    public static Application $app;

    public string $layout = 'main';

    public Request $request;
    public Response $response;
    public Router $router;
    public ?Controller $controller = null;
    public Database $db;
    public string $userClass;
    public Session $session;

    public ?UserModel $user;

    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;

        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
        $this->session = new Session();

        $this->userClass = $config['userClass'];
        $primaryValue = $this->session->get('user');

        if ($primaryValue) {
            $primaryKey = (new $this->userClass())->primaryKey();
            $this->user = (new $this->userClass())->findOne([$primaryKey => $primaryValue]);
        } else {
            $this->user = null;
        }
    }

    public function run()
    {
        echo $this->router->resolve();
    }

    public static function isGuest()
    {
        return !self::$app->user;
    }

    public function login(UserModel $user)
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }

    public function logout()
    {
        $this->user = null;
        $this->session->remove('user');
    }
}
