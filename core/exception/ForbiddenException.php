<?php

namespace app\core\exception;

/**
 * Class ForbiddenException
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\core\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permissions to access this page !';
    protected $code = 403;
}
