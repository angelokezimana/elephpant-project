<?php

namespace app\core\form;

use app\core\Model;

/**
 * Class Field
 * 
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\core\form
 */
class Field
{
    public CONST TYPE_TEXT = 'text';
    public CONST TYPE_PASSWORD = 'password';
    public CONST TYPE_NUMBER = 'number';
    public CONST TYPE_TEL = 'tel';

    public string $type;
    public Model $model;
    public string $attribute;

    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf(
            '
            <div class="form-group">
                <label>%s</label>
                <input type="%s" name="%s" value="%s" class="form-control%s">
                <div class="invalid-feedback">%s</div>
            </div>
            ',
            $this->attribute,
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->model->getFirstError($this->attribute),
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}
