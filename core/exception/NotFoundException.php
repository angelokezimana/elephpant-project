<?php

namespace app\core\exception;

/**
 * Class NotFoundException
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\core\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found !';
    protected $code = 404;
}
