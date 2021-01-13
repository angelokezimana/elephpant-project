<?php

namespace angelokezimana\elephpant;

use angelokezimana\elephpant\db\DbModel;

/**
 * Class UserModel
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package angelokezimana\elephpant
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}
