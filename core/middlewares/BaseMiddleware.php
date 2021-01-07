<?php

namespace app\core\middlewares;

/**
 * Class BaseMiddleware
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\core\middlewares
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}
