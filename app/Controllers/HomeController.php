<?php

namespace App\Controllers;

use App\Service\RekeningService;
use MA\PHPMVC\Interfaces\Request;
use MA\PHPMVC\MVC\Controller;

class HomeController extends Controller
{
    // protected $layout = 'app';

    public function welcome(Request $request)
    {
        response()->setNoCache();
        if ($request->user() == null) {
            return view('welcome');
        } else {
            return $this->index($request->user());
        }
    }

    private function index($user)
    {
        $rekService = (new RekeningService())->tableRekening($user->username);
        return $this->view('dashboard/index', [
            "title" => "Dashboard",
            "user" => [
                "name" => $user->username
            ],
            'saldoFix' => 100.000,
            'hasilHargaPengeluaran' => '',
            'hasilHarga' => '',
            'saldoRekFix' => 750.000,
            'saldoRek' => 90.000,
            'no_rek' => '00081828',
            'today' => 'hari jumat',
            'rekeningMasuk' => $rekService->rek_Masuk,
            'rekeningKeluar' => $rekService->rek_Keluar
        ]);
    }
}