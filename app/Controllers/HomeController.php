<?php

namespace App\Controllers;

use App\Service\RekeningService;
use MA\PHPMVC\Interfaces\Request;
use MA\PHPMVC\MVC\Controller;

class HomeController extends Controller
{
    // protected $layout = 'app';

    public function index(Request $request)
    {
        response()->setNoCache();
        if ($request->user() == null) {
            return view('welcome');
        } else {
            $rekService = new RekeningService();
            return $this->view('dashboard/index', $rekService->tableRekening($request->user()));
        }
    }
}