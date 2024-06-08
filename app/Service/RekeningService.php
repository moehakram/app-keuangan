<?php

namespace  App\Service;

use App\Repository\RekeningKeluarRepository;
use App\Repository\RekeningMasukRepository;
use MA\PHPMVC\Database\Database;
use App\Domain\User;

class RekeningService{

    public $rekeningMasukRepository;
    public $rekeningKeluarRepository;
    
    function __construct()
    {
        $pdo = Database::getConnection();
        $this->rekeningMasukRepository  = new RekeningMasukRepository($pdo);
        $this->rekeningKeluarRepository = new RekeningKeluarRepository($pdo);
    }

    function tableRekening(User $user) : array
    {
        $rekMasuk = $this->rekeningMasukRepository->findById($user->username);
        $rekKeluar = $this->rekeningKeluarRepository->findById($user->username);
        return [
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
            'rekeningMasuk' => $rekMasuk,
            'rekeningKeluar' => $rekKeluar
        ];
    }
}