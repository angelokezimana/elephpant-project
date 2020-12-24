<?php

namespace app\core;

/**
 * Class Request
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\core
 */
class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = strtolower($path);
        $position = strpos($path, '?');

        if($position === false) {
            return $path;
        }

        return substr($path, 0, $position);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
