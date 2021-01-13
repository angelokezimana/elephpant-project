<?php

namespace angelokezimana\elephpant\middlewares;

use angelokezimana\elephpant\Application;
use angelokezimana\elephpant\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package angelokezimana\elephpant\middlewares
 */
class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}
