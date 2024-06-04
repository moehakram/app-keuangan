<?php

namespace App\Models\User;

use MA\PHPMVC\MVC\Model;

class UserPasswordUpdateRequest extends Model
{
    public ?string $username = null;
    public ?string $oldPassword = null;
    public ?string $newPassword = null;

    public function rules(): array
    {
        return [
            'username' => SELF::RULE_REQUIRED,
            'oldPassword' => SELF::RULE_REQUIRED
        ];
    }
}
