<?php

namespace App\Controllers;

use App\Service\ServiceTrait;
use MA\PHPMVC\MVC\Controller;

class BaseController extends Controller {

    use ServiceTrait;

    protected $layout = 'app';

    public function __construct()
    {
        $this->authService();
    }
}