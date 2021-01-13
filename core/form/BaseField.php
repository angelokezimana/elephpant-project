<?php

namespace angelokezimana\elephpant\form;

use angelokezimana\elephpant\Model;

/**
 * Class BaseField
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package angelokezimana\elephpant\form
 */
abstract class BaseField
{
    public Model $model;
    public string $attribute;

    abstract public function renderInput(): string;

    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf(
            '
            <div class="form-group">
                <label>%s</label>
                %s
                <div class="invalid-feedback">%s</div>
            </div>
            ',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute),
        );
    }
}
