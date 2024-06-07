<?php

namespace  App\Service;

use App\Repository\RekeningKeluarRepository;
use App\Repository\RekeningMasukRepository;
use MA\PHPMVC\Database\Database;
use stdClass;

class RekeningService{

    public $rekeningMasukRepository;
    public $rekeningKeluarRepository;
    
    function __construct()
    {
        $pdo = Database::getConnection();
        $this->rekeningMasukRepository  = new RekeningMasukRepository($pdo);
        $this->rekeningKeluarRepository = new RekeningKeluarRepository($pdo);
    }

    function tableRekening(string $username) : ?stdClass
    {
        $rekMasuk = $this->rekeningMasukRepository->findById($username);
        $rekKeluar = $this->rekeningMasukRepository->findById($username);
        $respon = new stdClass;
        $respon->rek_Masuk = $rekMasuk;
        $respon->rek_Keluar = $rekKeluar;
        return $respon;
    }
}