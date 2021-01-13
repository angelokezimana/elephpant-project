<?php

namespace angelokezimana\elephpant\exception;

/**
 * Class ForbiddenException
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package angelokezimana\elephpant\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permissions to access this page !';
    protected $code = 403;
}
