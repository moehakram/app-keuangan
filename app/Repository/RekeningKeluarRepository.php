<?php

namespace App\Repository;

use App\Domain\RekeningKeluar;
use PDO;

class RekeningKeluarRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function save()
    {

    }

    public function update()
    {

    }

    public function findById(string $username)
    {
        $stmt = $this->connection->prepare("SELECT * FROM rekening_keluar WHERE username = :username");
        $stmt->execute([
            ':username' => $username
        ]);
    
        try {
            if ($row = $stmt->fetch()) {
                $rekeningKeluar = new RekeningKeluar();
                $rekeningKeluar->kode = $row['kode'];
                $rekeningKeluar->jumlah = $row['jumlah'];
                $rekeningKeluar->aksi = $row['aksi'];
                $rekeningKeluar->tanggal = $row['tanggal'];
                return $rekeningKeluar;
            } else {
                return null;
            }
        } finally {
            $stmt->closeCursor();
        }
        
    }
}
