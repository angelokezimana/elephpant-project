<?php

namespace app\models;

use app\core\Model;

/**
 * Class RegisterModel
 * }
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\models
 */
class RegisterModel extends Model
{
    public string $full_name = '';
    public string $email = '';
    public string $password = '';
    public string $confirm_password = '';

    public function register()
    {
        echo "Creating a new user ...";
    }

    public function rules(): array
    {
        return [
            'full_name' => [
                self::RULE_REQUIRED
            ],
            'email' => [
                self::RULE_REQUIRED,
                self::RULE_EMAIL
            ],
            'password' => [
                self::RULE_REQUIRED, [
                    self::RULE_MIN, 
                    'min' => 8
                ], [
                    self::RULE_MAX, 
                    'max' => 30
                ]
            ],
            'confirm_password' => [
                self::RULE_REQUIRED, [
                    self::RULE_MATCH,
                    'match' => 'password'
                ]
            ],
        ];
    }
}
