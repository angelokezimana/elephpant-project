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
    public Request $request;
    public Response $response;
    public Router $router;
    public Controller $controller;
    public Database $db;
    public Session $session;

    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;

        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
        $this->session = new Session();
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
