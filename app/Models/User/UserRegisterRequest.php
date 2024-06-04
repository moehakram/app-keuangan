<?php

namespace App\Models\User;

use MA\PHPMVC\MVC\Model;

class UserRegisterRequest extends Model
{
    public string $username = '';
    public string $email = '';
    public string $password = '';
    public string $confirmPassword = '';

    public function rules(): array
    {
        return [
            'username' => 'required|min:4|max:24',
            'email' => 'required|email',
            'password' => 'required|min:4',
            'confirmPassword' => 'required|match:password'
        ];
    }

    public function attributes(): array
    {
        return ['username', 'email', 'password', 'confirmPassword'];
    }

    public function labels(): array
    {
        return [
            'username' => 'Username',
            'email' => 'Email Address',
            'password' => 'Password',
            'confirmPassword' => 'Confirm Password'
        ];
    }
}
