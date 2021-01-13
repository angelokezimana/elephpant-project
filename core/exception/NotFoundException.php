<?php

namespace angelokezimana\elephpant\exception;

/**
 * Class NotFoundException
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package angelokezimana\elephpant\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found !';
    protected $code = 404;
}
