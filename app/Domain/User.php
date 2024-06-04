<?php

namespace App\Domain;

class User
{
    public int $id_user; // unik - primary
    public string $username; // unik
    public string $email;
    public string $password;
    public string $status;
    public string $level;
    public $no_rek;
}
