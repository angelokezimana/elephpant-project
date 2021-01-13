<?php

namespace angelokezimana\elephpant\form;

use angelokezimana\elephpant\Model;

/**
 * Class Form
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package angelokezimana\elephpant\form
 */
class Form
{
    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form;
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new InputField($model, $attribute);
    }
}
