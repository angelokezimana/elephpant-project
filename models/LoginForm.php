<?php

namespace app\models;

use app\core\Application;
use app\core\Model;

/**
 * Class LoginForm
 * }
 * @author Kezimana Aimé Angelo <kezangelo@gmail.com>
 * @package app\models
 */
class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function labels():array
    {
        return [
            'email' => 'E-mail',
            'password' => 'Password',
        ];
    }

    public function login()
    {
        $user = User::findOne(['email' => $this->email]);

        if (!$user) {
            $this->addError('email', 'User does not exist !');
            return false;
        }

        if (!password_verify($this->password, $user->password)) {
            $this->addError('email', 'User does not exist !');
            return false;
        }

        return Application::$app->login($user);
    }
}
