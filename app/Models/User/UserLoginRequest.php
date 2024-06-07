<?php

namespace App\Models\User;

use MA\PHPMVC\MVC\Model;

class UserLoginRequest extends Model
{
    public string $username = '';
    public string $password = '';

    public function rules(): array
    {
        return [
            'username' => SELF::RULE_REQUIRED,
            'password' => SELF::RULE_REQUIRED
        ];
    }
}
