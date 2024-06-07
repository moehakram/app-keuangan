<?php

namespace App\Domain;

class User
{
    public string $username; // varchar(31) primary-key
    public string $email; // varchar(63)
    public string $password; // varchar(255)
    public string $status; // varchar(15)
    public string $level; // varchar(7)
    public $no_rek; // char(15)
}
