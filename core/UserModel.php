<?php

namespace app\core;

use app\core\db\DbModel;

/**
 * Class UserModel
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\core
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
