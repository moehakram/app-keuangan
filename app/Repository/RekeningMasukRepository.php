<?php

namespace App\Repository;

use App\Domain\RekeningMasuk;
use PDO;

class RekeningMasukRepository
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
        $stmt = $this->connection->prepare("SELECT * FROM rekening_masuk WHERE username = :username");
        $stmt->execute([
            ':username' => $username
        ]);

        try {
            if ($row = $stmt->fetch()) {
                $rekeningMasuk = new RekeningMasuk();
                $rekeningMasuk->kode = $row['kode'];
                $rekeningMasuk->jumlah = $row['jumlah'];
                $rekeningMasuk->aksi = $row['aksi'];
                $rekeningMasuk->tanggal = $row['tanggal'];
                return $rekeningMasuk;
            } else {
                return null;
            }
        } finally {
            $stmt->closeCursor();
        }
    }
}
