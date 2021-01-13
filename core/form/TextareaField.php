<?php

namespace angelokezimana\elephpant\form;

use angelokezimana\elephpant\Model;

/**
 * Class TextareaField
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package angelokezimana\elephpant\form
 */
class TextareaField extends BaseField
{
    public function renderInput(): string
    {
        return sprintf(
            '<textarea name="%s" class="form-control%s">%s</textarea>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->{$this->attribute},
        );
    }
}
