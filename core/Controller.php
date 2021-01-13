<?php

namespace angelokezimana\elephpant;

use angelokezimana\elephpant\middlewares\BaseMiddleware;

/**
 * Class Controller
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package angelokezimana\elephpant
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \angelokezimana\elephpant\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}
