<?php

namespace app\models;

use app\core\UserModel;

/**
 * Class User
 * }
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\models
 */
class User extends UserModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETE = 2;

    public string $full_name = '';
    public string $email = '';
    public int $status = self::STATUS_INACTIVE;
    public string $password = '';
    public string $confirm_password = '';

    public function save()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    public function tableName(): string
    {
        return 'users';
    }

    public function primaryKey(): string
    {
        return 'id';
    }

    public function attributes(): array
    {
        return ['full_name', 'email', 'status', 'password'];
    }

    public function labels(): array
    {
        return [
            'full_name' => 'Full name',
            'email' => 'E-mail',
            'password' => 'Password',
            'confirm_password' => 'Confirm password'
        ];
    }

    public function getDisplayName():string
    {
        return $this->full_name;
    }

    public function rules(): array
    {
        return [
            'full_name' => [
                self::RULE_REQUIRED
            ],
            'email' => [
                self::RULE_REQUIRED,
                self::RULE_EMAIL, [
                    self::RULE_UNIQUE,
                    'class' => self::class
                ]
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
