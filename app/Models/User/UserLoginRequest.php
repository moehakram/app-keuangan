<?php

namespace App\Models\User;

use MA\PHPMVC\MVC\Model;

class UserLoginRequest extends Model
{
    public ?string $username = null;
    public ?string $password = null;

    public function rules(): array
    {
        return [
            'username' => SELF::RULE_REQUIRED,
            'password' => SELF::RULE_REQUIRED
        ];
    }
}
